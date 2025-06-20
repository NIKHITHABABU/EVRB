<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$k=$obj->complaint_select($key);
 // echo $key;exit;
$smartyObj->assign("view",$k);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
{ 
 
  $complaint=trim($_POST['complaint']);
 
  $obj->complaintedit($complaint,$key);
 
}
else
   echo "<script>alert('complaint is empty')</script>";
}
$smartyObj->display('evsubheader.tpl');
$smartyObj->display('complaintedit.tpl');
$smartyObj->display('footer.tpl');
?>