<?php
if(isset($_POST['submit'])){
    $fromEmail=  "From: ashaikh34987@gmail.com";
    $toEmail= $_POST['email'];
    $Name= $_POST['name'];
    $SubjectName = $_POST['message'];


        $to = "ashaikh34987@gmail.com";
         $subject = "Email : $toEmail ";
         
         $message = "Message : $SubjectName";
         
         
         $header = "From:ashaikh34987@gmail.com \r\n";
         
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            $_SESSION['kbc']= "<p align='center'> <font color=Green> Message Sent Succesfully</font> </p>";
            header('location: mail.php');
         }else {
            echo "Message could not be sent...";
         }
}
?>