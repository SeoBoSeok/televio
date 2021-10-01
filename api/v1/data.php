<?php
include_once ('../common.php');
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


// curl -d '{ "createAt":"2021-10-01_12-35-16.233355", "id":"id", "shape":"PlateShape.halfRoundRect", "width":130.0, "height":30.0, "title":"010.9792.1006", "titleSize":30.0, "subtitle":"PLEASE CONTACT THIS NUMBER", "subtitleSize":12.0, "plateSubtitlePosition":"PlateSubtitlePosition.top", "fontTitle":"Noto Sans", "fontSubtitle":"Noto Sans", "textColor”:”ffffff”, "backgroundColor”:”005a99”, "backgroundAsset":null }' -H "Content-Type: application/json" -X POST https://pamforest.com/api/v1/data.php