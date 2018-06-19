<?php
ini_set('display_errors', 1);
$email = $_POST['email'];
//$filename = 'suscribers.txt';
//$somecontent = "$email\n";

// Let's make sure the file exists and is writable first.

    $txt = $_POST['email'].'  ';
    $file = fopen('mailing_list.csv','a+');
    if ($file){

fwrite($file,$txt);
fclose($file);
   // fwrite($file,$txt);
    $message= "Success!. You have been added to our email list.";
	$status  = "success";
	$data = array(
                'status'  => $status,
                'message' => $message
            );
        header("index.php");
            echo json_encode($data);

    }
            else
                echo "fail";
/*} else {
       $message= "An error occurred, please try agains.";
	$status  = "error";
	$data = array(
                'status'  => $status,
                'message' => $message
            );

            echo json_encode($data);
}*/
?>
