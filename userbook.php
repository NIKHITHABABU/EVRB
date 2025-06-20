<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['loginkey'];
$bkey=$_GET['a'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['date'])AND($_POST['date'])!=null)
{
if(isset($_POST['time'])AND($_POST['time'])!=null)
{
if(isset($_POST['hours'])AND($_POST['hours'])!=null)
{
	$Date=trim($_POST['date']);
	$Time=trim($_POST['time']);
	$Hours=trim($_POST['hours']);
	$obj->bookuser($Date,$Time,$Hours,$lkey,$bkey);
}
else
	echo"<script>alert('hours is empty')</script>";
}
else
	echo"<script>alert('time is empty')</script>";
}
else
	echo"<script>alert('date is empty')</script>";
}
$smartyObj->display('evsubheader.tpl');
$smartyObj->display('userbook.tpl');
$smartyObj->display('footer.tpl');
?>
	