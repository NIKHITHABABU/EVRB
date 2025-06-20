<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$Obj=new userclass();
//$key=$_COOKIE['loginkey'];
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$a=$Obj->bunkselect();
$smartyObj->assign("data",$a);

if(isset($_POST['hide'])&&($_POST['hide'])=='h')
{
	if(isset($_POST['search'])&&($_POST['search'])!=null)
{
 $searchbunk=trim($_POST['search']);
 $w=$Obj->bunksearch($searchbunk);
 $smartyObj->assign("data",$w);
 }
 else
 	echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('evsubheader.tpl');
$smartyObj->display('searchbunk.tpl');
$smartyObj->display('footer.tpl');
}
else
{   
    Header("location:login.php");
}
?>
