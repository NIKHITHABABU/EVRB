<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$v=$obj->bookedslot_select($key);
$smartyObj->assign("view",$v);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['bookdate'])AND($_POST['bookdate'])!=null)
{ 
  if(isset($_POST['booktime'])AND($_POST['booktime'])!=null)
{ 
  if(isset($_POST['hours'])AND($_POST['hours'])!=null)
{ 
 
  $bookdate=trim($_POST['bookdate']);
  $booktime=trim($_POST['booktime']);
  $hours=trim($_POST['hours']);
 
  $obj->bookedslotedit($bookdate,$booktime,$hours,$key);
 
}
else
   echo "<script>alert('hours is empty')</script>";
}
else
echo "<script>alert('booktime is empty')</script>";
}
else
echo "<script>alert('bookdate is empty')</script>";
}
$smartyObj->display('evsubheader.tpl');
$smartyObj->display('bookedslotedit.tpl');
$smartyObj->display('footer.tpl');
}
else
{ 
  Header("location:login.php");
}
?>