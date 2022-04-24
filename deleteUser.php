<?php
require_once('modelUser.php');
$dhena = new User();
if(isset($_GET['id'])){
$myID=$_GET['id'];
$dhena->deleteDhenat($myID);
}
?>