<?php
$post_name=$_POST["name"];
$email_from=$_POST["email"];
$cust_msg=$_POST["message"];

 
 $to = "nasywaibtsmh@gmail.com";
 
 $subject = "An email from  by using Enquiry form";
 
 
 $headers = "From: $email_from";
 
 $sent = mail($to, $subject, $cust_msg, $headers);
 
 if($sent)
 
 {echo "Your message is sent successfully!"; }
 
 else
 
 {echo "An error occured while sending email!"; }
 
 ?>