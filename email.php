<?php
    $to = "mhkgarg@gmail.com";
    $subject = "test email";
    $body = "hi there";
    $from = "From: nitkevents <admin@nitk.com>";
    if(mail($to,$subject,$body,$from))
        echo "email sent";
    else echo "problem sending mail";
?>