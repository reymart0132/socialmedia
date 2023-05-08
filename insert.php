<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';
$user = new user();

if(!empty($_GET)){
  $insert = new insert($_GET['status'],$user->data()->id);
  $insert->insertTask();
  header("Location:index.php?status=success");
}
?>
