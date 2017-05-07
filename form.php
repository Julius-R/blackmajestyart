
<?php


//info gathered from contact form
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

//Info to send email off
$to = 'mshorter2012@gmail.com';
$subject = 'Digital/Paint Request';
$body = "From: $name \n E-Mail: $email \n Message: $msg";


mail($to, $subject , $body);

echo "Your message has successfully been sent! <br>
	<a href=\"index.html\">Home</a>";
?>

