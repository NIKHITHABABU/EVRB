<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['loginkey'];
$a=$obj->bunkprofile($key);
$smartyObj->assign("view",$a);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['bunkname'])AND($_POST['bunkname'])!=null)
{
if(isset($_POST['address'])AND($_POST['address'])!=null)
{
	if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
{
	if(isset($_POST['district'])AND($_POST['district'])!=null)
{
	if(isset($_POST['city'])AND($_POST['city'])!=null)
{
    if(isset($_POST['locstreet'])AND($_POST['locstreet'])!=null)
{
	if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
{
	if(isset($_POST['email'])AND($_POST['email'])!=null)
{
	
$bunkname=trim($_POST['bunkname']);
$address=trim($_POST['address']);
$pincode=trim($_POST['pincode']);
$district=trim($_POST['district']);
$city=trim($_POST['city']);
$locstreet=trim($_POST['locstreet']);
$contactno=trim($_POST['contactno']);
$email=trim($_POST['email']);
$obj->bunkedit($bunkname,$address,$pincode,$district,$city,$locstreet,$contactno,$email,$key);
}
else
	echo"<script>alert('Email is empty')</script>";
}
else
	echo"<script>alert('contact number is empty')</script>";
}
else
	echo"<script>alert('locstreet is empty')</script>";
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
	echo"<script>alert('bunkname is empty')</script>";
}
$smartyObj->display('bunksubheader.tpl');
$smartyObj->display('bunkprofile.tpl');
$smartyObj->display('footer.tpl');
?>