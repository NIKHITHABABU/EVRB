<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$s = $obj->slotbookedview($key);
$smartyObj->assign("view",$s);
$smartyObj->display('bookedview.tpl');
?>