<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$a= $obj->replyview($key);
$smartyObj->assign("view",$a);
$smartyObj->display('evsubheader.tpl');

$smartyObj->display('replyview.tpl');
$smartyObj->display('footer.tpl');

?>