<?php

    $name = $_POST['name'];
    $user_email = $_POST['email'];
    $message = $_Post['message'];

    $from = 'From: theuser';
    $to = "thehescu6@gmail.com";

    $subject = 'New User Email';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
          if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
    	    } else { 
    	    echo '<p>Something went wrong, go back and try again!</p>';
    	}
    } else if ($_POST['submit'] && $human != '4') {
    	echo '<p>You answered the anti-spam question incorrectly!</p>';
        }

?>
