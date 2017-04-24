<?php header( 'Location: /index.html' ) ;  ?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $currentsite = $_POST['currentsite'];
    $call = $_POST['call'];
    $message = $_POST['message'];
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    $to = 'farasat@flexboxdesign.com'; 
    $subject = "Contact Form";
?>