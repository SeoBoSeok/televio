<?php
include_once ('../common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

$result = $_REQUEST;
$json = $_POST;

$return = array();

$return["result"] = "success";
$return["data"] = $json;

echo json_encode( $return );