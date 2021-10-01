<?php
include_once ('../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

$result = $_REQUEST;
// echo $_GET;
// echo '1111';
// echo $_POST;

$json = $_POST['data'];
// echo $json;

$return = array();

if ($json) {
  $return["result"] = "success";
  $return["data"] = $json;
  
  echo json_encode( $return );
} else {
  $return["result"] = "fail";

  echo json_encode ( $return );
}
