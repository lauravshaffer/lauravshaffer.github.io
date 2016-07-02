<?php
if(isset($_POST["submit"])) {
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo  $message = $_POST["yourMessage"];

$mailBody="Name: $name\nEmail: $email\n\n$message";

mail ('lauravshaffer@gmail.com', 'Message from Portfolio Contact', $mailBody, "From: $name <$email>");
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thanks!</title>

</head>
<body>

<h1>Thanks</h1>
<p>We'll get back to you as soon as possible.</p>
<p><a href="https://lauravshaffer.github.io">Back to my Portfolio</a></p>

</body>
</html>
