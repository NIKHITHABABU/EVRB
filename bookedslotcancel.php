<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$amount=$_GET['amount'];
$lid=$_GET['id'];
$bid=$_GET['bunkid'];
$obj->cancelbookedslot($key,$amount,$lid,$bid);
?>