<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$b=$obj->userprofile($key);
$smartyObj->assign("view",$b);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=null)
{
if(isset($_POST['address'])AND($_POST['address'])!=null)
{
	if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
{
	if(isset($_POST['district'])AND($_POST['district'])!=null)
{
	if(isset($_POST['city'])AND($_POST['city'])!=null)
{
    if(isset($_POST['vehicleno'])AND($_POST['vehicleno'])!=null)
{
	if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
{

	
$name=trim($_POST['name']);
$address=trim($_POST['address']);
$pincode=trim($_POST['pincode']);
$district=trim($_POST['district']);
$city=trim($_POST['city']);
$vehicleno=trim($_POST['vehicleno']);
$contactno=trim($_POST['contactno']);
$obj->useredit($name,$address,$pincode,$district,$city,$vehicleno,$contactno,$key);
}
else
	echo"<script>alert('contactno is empty')</script>";
}
else
	echo"<script>alert('vehicleno is empty')</script>";
}
else
	echo"<script>alert('city is empty')</script>";
}
else
	echo"<script>alert('district is empty')</script>";
}
else
	echo"<script>alert('pincode is empty')</script>";
}
else
	echo"<script>alert('address is empty')</script>";
}
else
	echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('userprofile.tpl');
$smartyObj->display('footer.tpl');
?>