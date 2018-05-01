<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in()){
    $user_home->redirect('index.php');
}

$stmt= $user_home->runQuery("SELECT * FROM users WHERE id=:uid");

$stmt->execute(array(":uid"=>$_SESSION['userSession']));

$row= $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php include("header.php");?>

<?php include("footer.php");?>