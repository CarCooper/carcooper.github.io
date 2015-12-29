<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "rish281293@gmail.com";
$subject = "Tutorial";
$body = "This is test mail.";

mail ($to,$subject,$body);

echo "Message sent! <a href='index.html'>click here</a> to send another email";

>
