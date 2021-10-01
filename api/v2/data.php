<?php
include_once ('../../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

// $result = $_REQUEST;
// echo $_GET;
// echo '1111';
// print_r( $_POST);

$json =  json_decode(file_get_contents('php://input'), true);
// // echo $json;

$return = array();

if (!empty($json)) {
  $return["result"] = "success";
  $return["data"] = $json;
  
  echo json_encode( $return );
} else {
  
  $return["result"] = "fail";

  echo json_encode ( $return );
}

// $return["result"] = "success";
// $return["data"] = $json;

// print_r($json);

// curl -d '{ "createAt":"2021-10-01_12-35-16.233355", "id":"id", "shape":"PlateShape.halfRoundRect", "width":130.0, "height":30.0, "title":"010.9792.1006", "titleSize":30.0, "subtitle":"PLEASE CONTACT THIS NUMBER", "subtitleSize":12.0, "plateSubtitlePosition":"PlateSubtitlePosition.top", "fontTitle":"Noto Sans", "fontSubtitle":"Noto Sans", "textColor":"ffffff", "backgroundColor":"005a99", "backgroundAsset":null }' -H "Content-Type: application/json" -X POST https://pamforest.com/api/v1/data.php

$myfile = fopen("data.json", "w") or die("Unable to open file!");
fwrite($myfile, json_encode($json));
fclose($myfile);

$boundary = md5(mt_rand() . microtime()); //임의의 구분자 생성


//MetaData
$metaData = json_encode([
	'name' => 'evio.json',
	'description' => '차량용 번호판',
  'charset' => 'UTF-8',
  'parents' => '{"id": "1eBicj01k8My1Nn56Ffc6ngEsRa-CLc0a"}',
]);

//file data
$fileContent = $json;

//request body
$data = "--{$boundary}\r\n"                    //구분자
	."Content-Type: application/json\r\n\r\n"  //metaData의 mime 타입
	."{$metaData}\r\n"                         //metaData
	."--{$boundary}\r\n"                       //구분자
	."Content-Transfer-Encoding: base64\r\n\r\n" //file data의 인코딩 설정
	.base64_encode($fileContent) . "\r\n"        //file data
	."--{$boundary}--";                          //구분자

//top-level header
$requestHeader = [
    'Content-Type:multipart/related; boundary=' . $boundary
];

$url = "https://www.googleapis.com/upload/drive/v3/files?uploadType=media";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, $requestHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, true);
 
// $ch = curl_init();                                 //curl 초기화
// curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);     //connection timeout 10초 
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);       //POST data
// curl_setopt($ch, CURLOPT_POST, true);              //true시 post 전송 
 
$response = curl_exec($ch);
curl_close($ch);
 
return $response;