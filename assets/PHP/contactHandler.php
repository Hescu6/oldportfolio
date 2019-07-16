<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = ['subject'];
    $message = $_POST['message'];

    $from = 'From: $name';
    $to = 'thehescu6@gmail.com';

    $spamcheck = $_POST['spamcheck'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($spamcheck == '10') {
                if (mail ($to, $subject, $body, $from)) {
    	        echo '<p>Your message has been sent!</p>';
    	    } else {
    	        echo '<p>Something went wrong, go back and try again!</p>';
    	    }
    	} else if ($_POST['submit'] && $spamcheck != '10') {
    	    echo '<p>It seems you could be a bot...do it again</p>';
    	}
        } else {
            echo '<p>You are missing some info.</p>';
        }
    }
?>
