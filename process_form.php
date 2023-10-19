<!-----PHP--->

<?php
      if ($_SERVER["REQUEST_METHOD"] =="POST") 
          $name = $_POST["name"];
          $email = $_POST["message"];

          $to = "mdilaacademy@gmail.com";
          $subject = "user Information from contact form";
          $headers = "From: $email";

          $message_body = "Name: $name\nEmail: $email\nMessage: $message";

          if (mail($to, $subject, $message_body, $headers)) {echo "Message sent succesfully!";
          } else {
            echo "Error sending the message. Please try again later.";
          }
          ?>