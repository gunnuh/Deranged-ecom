<?php 
$error = '';
if(isset($_POST['submit'])){
    $to = "gunnuhh2009@gmail.com"; // this is your Email address
    //Inputs
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $test .= "Full Name: $name\n Subject: $subject\n Message: $message\n";
    $headers = "From: " .$name ."\r\n";
    $txt = "You have recieved an email from " .$name ."\r\nEmail: " .$email ."\r\n Message: " .$message;

    if (mail($to,$subject,$txt,$headers)) {      
      $status = "Message Sent";
    } else {
      $status = 'Try again later!';
    }
  }
?>