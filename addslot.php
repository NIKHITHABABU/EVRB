<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['slot'])AND($_POST['slot'])!=null)
{
if(isset($_POST['rechargeamount'])AND($_POST['rechargeamount'])!=null)
{
 $slot=trim($_POST['slot']);
 $rechargeamount=trim($_POST['rechargeamount']);
   $obj->slot($slot,$rechargeamount,$key);
}
else
echo"<script>alert('slot is empty')</script>";
}
else
echo"<script>alert('rechargeamount is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('addslot.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:login.php");
}
?>