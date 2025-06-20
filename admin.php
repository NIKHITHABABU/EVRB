<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$k=$obj->count_bunks();
$smartyObj->assign("bunk",$k);
$j=$obj->count_customers();
$smartyObj->assign("customers",$j);
$i=$obj->count_bookings();
$smartyObj->assign("bookings",$i);
$l=$obj->count_complaints();
$smartyObj->assign("complaints",$l);
$smartyObj->display('admin.tpl');
?>