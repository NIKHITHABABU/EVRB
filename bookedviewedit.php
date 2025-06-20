<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['k'];
$k=$obj->getbookingdetails($key);
$smartyObj->assign("view",$k);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['date'])AND($_POST['date'])!=null)
{
	if(isset($_POST['time'])AND($_POST['time'])!=null)
	{
	$date=trim($_POST['date']);
	$time=trim($_POST['time']);
	$obj->bookdetailsedit($date,$time,$key);
	}
    else
	echo"<script>alert('time is empty')</script>";
	}
     else
	echo"<script>alert('date is empty')</script>";
	}
	$smartyObj->display('bookedviewedit.tpl');
}
else
{	
	Header("location:login.php");
}
	
?>