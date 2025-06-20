<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
//echo $key;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['reply'])AND($_POST['reply'])!=null)
{ 
 
  $reply=trim($_POST['reply']);
 
  $obj->reply($reply,$key);
 
}
else
   echo "<script>alert('reply is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('reply.tpl');
$smartyObj->display('footer.tpl');

?>