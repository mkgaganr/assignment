<?php
$receiver = "gagan.cs18@bmsce.ac.in";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:gagan.cs18@bmsce.ac.in";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>