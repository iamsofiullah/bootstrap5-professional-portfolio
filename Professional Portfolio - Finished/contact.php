<?php

$name = $_POST['visitors_name'];
$email = $_POST['visitors_email'];
$message = $_POST['visitors_message'];

$emailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "sofiullahc@gmail.com";

$subject = "Email From Portfolio Site.";

mail($recipient, $subject, $message, $emailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio One page website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark-1">
    
    <div class="container text-center min-vh-100 d-flex flex-column justify-content-center">
        <div class="col-lg-8 mx-auto">
            <h1 class="pb-4">Thank you for contracting me. I will get back to you as soon as possible!</h1>
            <p class="text-white">Go back to the <a href="index.html" class="text-danger">homepage</a>.</p>
        </div>
    </div>

</body>
</html>

';


