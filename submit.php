<?php
if(isset($_POST["send"])) {
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo  $message = $_POST["yourMessage"];
$to = "lauravshaffer@gmail.com";
$subject = "Message from Portfolio Contact Form";
;

mail($to,$subject,$name,$email,$message);
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thanks!</title>

</head>
<body>

<h1>Thanks</h1>
<p>I will get back to you as soon as possible.</p>
<p><a href="https://lauravshaffer.github.io">Back to my Portfolio</a></p>

</body>
</html>
