<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$amount=$_GET['amount'];
$key=$_COOKIE['loginkey'];
$bkey=$_GET['bkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['nameoncard'])AND($_POST['nameoncard'])!=null)
{
if(isset($_POST['cardnumber'])AND($_POST['cardnumber'])!=null)
{
	if(isset($_POST['cvv'])AND($_POST['cvv'])!=null)
{
	if(isset($_POST['expirationdate'])AND($_POST['expirationdate'])!=null)
{
	
$nameoncard=trim($_POST['nameoncard']);
$cardnumber=trim($_POST['cardnumber']);
$cvv=trim($_POST['cvv']);
$expirationdate=trim($_POST['expirationdate']);
// $makepayment=trim($_POST['makepayment']);
$obj->payment($nameoncard,$cardnumber,$cvv,$expirationdate,$amount,$key,$bkey);
}
else
	echo"<script>alert('expirationdate is empty')</script>";
}
else
	echo"<script>alert('cvv is empty')</script>";
}
else
	echo"<script>alert('cardnumber is empty')</script>";
}
else
	echo"<script>alert('nameoncard is empty')</script>";
}
$smartyObj->display('payment.tpl');
?>