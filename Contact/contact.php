<?php

If(isset($_POST['submit'])) {
   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $subject = trim($_POST['subject']);
   $message = trim($_POST['message']);

   $myMail = "favourgabrielcutie08@gmail.com";//only works with info@mail
    $header = "From: " . $email;
    $message2 = "You have received a 
    message from " . $name . ". \n\n" . $message;

   //1. E-mail you are sending it to
   //2. Subject
   //3. Is the message
   mail($myMail, $subject, $message2, $header);
   header("Location: index.php?mailsent");
}



?>

