<?php
   if(isset($_POST['send'])) {
   // Prepare the email
   $to = 'willwilliams02ww4254503@gmail.com';
   $from='ww4254503@gmail.com'
   $subject = 'Message sent from website';
   $message = $_POST['message'];
   $name = $_POST['name'];
   $email= $_POST['email'];
      
   // Send it
   $sent = mail($to, $subject, $message,$name,$email);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
   }
?>
