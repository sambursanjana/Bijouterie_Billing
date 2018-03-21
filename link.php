<?php
session_start();
$Amount=$_POST['Amount'];
$_SESSION['Amount']=$Amount;
$GrossAmount=$_POST['GrossAmount'];
$_SESSION['GrossAmount']=$GrossAmount;
$VAT=$_POST['VAT'];
$_SESSION['VAT']=$VAT;



header("location:bill.php");

?>