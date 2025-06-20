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
	if(isset($_POST['month'])&&($_POST['month'])!=null)
{
 $searchmonth=trim($_POST['month']);
 $w=$obj->monthsearch($searchmonth,$key);
 $smartyObj->assign("data",$w);
  $w1=$obj->gettotalamounts($searchmonth);
 $smartyObj->assign("total",$w1);
 }
 else
 	echo"<script>alert('month is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('monthly.tpl');
$smartyObj->display('footer.tpl');
}
else
{   
    Header("location:login.php");
}
?>