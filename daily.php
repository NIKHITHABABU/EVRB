<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['loginkey'];
if(isset($_POST['hide'])&&($_POST['hide'])=='h')
{
	if(isset($_POST['date'])&&($_POST['date'])!=null)
{
 $searchbunk=trim($_POST['date']);
 $w=$obj->dailysearch($searchbunk,$key);
 $smartyObj->assign("data",$w);
  $w1=$obj->gettotalamount($searchbunk);
 $smartyObj->assign("total",$w1);
 }
 else
 	echo"<script>alert('date is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('daily.tpl');
$smartyObj->display('footer.tpl');
}
else
{   
    Header("location:login.php");
}
?>