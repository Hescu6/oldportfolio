<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $name = $_POST['name'];
    $from =  $_POST['email'];
    $subject = $_POST['subject']." from: ".$from;
    $message = $_POST['message']."\n\nFrom: ".$name." - ".$from;

    #$from = '$email';
    $to = "thehescu6@gmail.com";

    $spamcheck = $_POST['spamcheck'];

    $headers = "From:" . $from;
/*
    if (mail($to,$subject,$message, $headers)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }

*/
    if ($name != '' && $from != '') {
        if ($spamcheck == '10') {
            if (mail($to,$subject,$message, $headers)) {
                echo '<p>Your message has been sent!</p>';
            } else {
                echo '<p>Something went wrong, go back and try again!</p>';
            }
        } else if ($spamcheck != '10') {
            echo '<p>It seems you could be a bot...do it again</p>';
        }
    } else {
        echo '<p>You are missing some info.</p>';
    }
?>
