<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['bunkname'])AND($_POST['bunkname'])!=null)
{
if (preg_match('/^[A-Z a-z]*$/', $_POST['bunkname']))
{
if(isset($_POST['address'])AND($_POST['address'])!=null)
{
if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
{
if (preg_match('/^[0-9]*$/', $_POST['pincode']))
	{
	$no=strlen($_POST['pincode']);
	if($no==6)
{
	if(isset($_POST['district'])AND($_POST['district'])!=null)
{
	if(isset($_POST['city'])AND($_POST['city'])!=null)
{
    if(isset($_POST['locstreet'])AND($_POST['locstreet'])!=null)
{
	if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
{
	if (preg_match('/^[0-9]*$/', $_POST['contactno']))
{
	$nm1=strlen($_POST['contactno']);
	if($nm1>=10 and $nm1<=12)
{
	if(isset($_POST['timing'])AND($_POST['timing'])!=null)
{
	if(isset($_POST['email'])AND($_POST['email'])!=null)
{
	if(isset($_POST['password'])AND($_POST['password'])!=null)
{
$bunkname=trim($_POST['bunkname']);
$address=trim($_POST['address']);
$pincode=trim($_POST['pincode']);
$district=trim($_POST['district']);
$city=trim($_POST['city']);
$locstreet=trim($_POST['locstreet']);
$contactno=trim($_POST['contactno']);
$timing=trim($_POST['timing']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);
$obj->bunk($bunkname,$address,$pincode,$district,$city,$locstreet,$contactno,$timing,$email,$password);
}
else
echo"<script>alert('Password is empty')</script>";
}
else
	echo"<script>alert('Email is empty')</script>";
}
else
	echo"<script>alert('timing is empty')</script>";
}	
else
	echo "<script> alert('contact number should be 10 digit or 12 digit')</script>";
}
else
	echo "<script> alert('Please enter contact number!')</script>";
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
	echo "<script> alert('pincode number must contain 6 characters')</script>";
}
else
	echo "<script> alert('Please enter numbers for pincode')</script>";
}
else
	echo"<script>alert('pincode is empty')</script>";
}
else
	echo"<script>alert('address is empty')</script>";
}
else
	echo "<script> alert('Please enter alphabets for bunk name') </script>";
}
else
	echo"<script>alert('bunkname is empty')</script>";
}
$smartyObj->display('subheader.tpl');
$smartyObj->display('bunk.tpl');
$smartyObj->display('footer.tpl');
?>