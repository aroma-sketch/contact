<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n;
$recipent = "guptaaroma9@gmail.com";

mail($recipent, $message, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <h1>thankypuy</h1>
       <p class="back"><a href="index.html">homepage</a></p>
    </div>
</body>
</html>


';
?>