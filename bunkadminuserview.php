<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$s = $obj->adminuserview();
$smartyObj->assign("view",$s);
$smartyObj->display('adminuserview.tpl');
?>