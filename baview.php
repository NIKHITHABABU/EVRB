<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$s = $obj->adminbookingview();
$smartyObj->assign("view",$s);
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('baview.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>