<?php
include 'conn.php';
$txnRef = $_GET['merref'];
$payRef = $_GET['payRef'];
$trnref = $_GET['trnref'];
$st = $_GET['st'];
$cardName = $_GET['cardHolderName'];
$cardNum = $_GET['cardNum'];
$apprAmt = $_GET['amt'];
$pymode = $_GET['mode'];
$respcode = $_GET['respcode'];
$respdesc = $_GET['respdesc'];
$meramt = $_GET['meramt'];
$sercharge = $_GET['sercharge'];
$trncharge = $_GET['trncharge'];
$fininscharge = $_GET['fininscharge'];

if($respcode == '00'){
$update = "UPDATE bankslip SET respcode='$respcode', tranref='$trnref', respdesc='$respdesc', status='$st', role ='used' WHERE Branch= '$txnRef'";
if ($conn->query($update) === TRUE) {
//   $url = 'response.php?tr='.$txnRef;
//  header('Location: http://admissions.mulcoed.edu.ng/pay/'.$url);
 } else {
 }
 
 

$url = 'reciept.php?tr='.$txnRef;
 header('Location: http://admissions.isi.ui.edu.ng/olevel/pay/'.$url);
}else{
  $update = "UPDATE bankslip SET respcode='$respcode', tranref='$trnref', respdesc='$respdesc', status='$st', role ='used' WHERE Branch= '$txnRef'";
if ($conn->query($update) === TRUE) {
//   $url = 'response.php?tr='.$txnRef;
//  header('Location: http://admissions.mulcoed.edu.ng/pay/'.$url);
 } else {
 }
    $url = 'error.php?tr='.$txnRef;
 header('Location: http://admissions.isi.ui.edu.ng/olevel/pay/'.$url);
}

echo "Merchant Transaction Number: " .$txnRef .'<br>';
echo "Payment Reference Number: " . $payRef .'<br>';
echo "Transaction Reference Number: " . $trnref .'<br>';
echo "Transaction Status: " . $st .'<br>';
echo "Card Name: " . $cardName . '<br>';
echo "Card Number: " . $cardNum .'<br>';
echo "Approved Amount: " . $apprAmt .'<br>';
echo "Response Code: " . $respcode .'<br>';
echo "Response Description: " . $respdesc .'<br>';
echo "Merchant Amount: " . $meramt .'<br>';
echo "Service Charge: " . $sercharge .'<br>';
echo "Transaction Charge: " . $trncharge .'<br>';
echo "Financial Charge: " . $fininscharge .'<br>';
?>

