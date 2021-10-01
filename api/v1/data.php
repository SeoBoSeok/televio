<?php
include_once ('../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

// $result = $_REQUEST;
// echo $_GET;
// echo '1111';
// print_r( $_POST);

$json = $_POST;
// // echo $json;

$return = array();

if (!empty($_POST)) {
  $return["result"] = "success";
  $return["data"] = $json;
  
  echo json_encode( $return );
} else {
  $return["result"] = "fail";

  echo json_encode ( $return );
}
