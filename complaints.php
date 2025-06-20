<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$loginid=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['complaints'])AND($_POST['complaints'])!=null)
{ 
 
  $complaints=trim($_POST['complaints']);
 
  $obj->complaints($complaints,$loginid);
 
}
else
   echo "<script>alert('complaints is empty')</script>";
}
$smartyObj->display('evsubheader.tpl');
$smartyObj->display('complaints.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:login.php");
}
?>