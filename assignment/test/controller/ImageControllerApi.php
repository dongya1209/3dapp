<?php
require_once('../model/ImageModel.class.php');
header('content-type:application/json');
header('Access-Control-Allow-Origin:*');
$type = $_GET['type'];
$obj = new ImageModel();
$my_array = $obj->fetchAll($type);
echo urldecode(json_encode($my_array));
$obj->close();
?>