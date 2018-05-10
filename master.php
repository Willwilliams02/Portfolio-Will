<?php
   if(isset($_POST['send'])) {
   // Prepare the email
   $to = 'willwilliams02ww4254503@gmail.com';
   $from='willwilliams02ww4254503@gmail.com'
   $subject = 'Message sent from website';
   $message = $_POST['message'];
   // Send it
   $sent = mail($to, $subject, $message);
   if($sent) {
   echo 'Your message has been sent successfully!';
   } else {
   echo 'Sorry, your message could not send.';
   }
   }
?>
