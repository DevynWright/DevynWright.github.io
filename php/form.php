<?php
// hide the errors
error_reporting( 0 );

// Get the values from html form
$name       =    $_POST['name'];
$email      =    $_POST['email'];
$company    =    $_POST['company'];
$phone    =    $_POST['phone'];
$message    =    $_POST['message'];

// Email Address where you want to received the mails
$to = "wrightdevyn@gmail.com";

// Mail Subject
$subject = "Landing Page Form";

// Sender details
$sender_name = "Lets get in Touch!";
$sender_email = "no-reply@newtemplate.net";

// Output table
$email_message = '<html>
<head>
    <title>Get a Quote</title>
</head>
<body>
<table>
    <tr>
        <th align="left"><strong>Full Name:</strong></th>
        <td align="left">' . $name . '</td>
    </tr>
	  <tr>
        <th align="left"><strong>Email:</strong></th>
        <td align="left">' . $email . '</td>
    </tr>
	<tr>
        <th align="left"><strong>Company:</strong></th>
        <td align="left">' . $company . '</td>
    </tr>
    <tr>
        <th align="left"><strong>Phone:</strong></th>
        <td align="left">' . $phone . '</td>
       <tr>
        <th align="left"><strong>Message:</strong></th>
        <td align="left">' . $message . '</td>
    </tr>
</table>
</body>
</html>
';

//Headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:'.$sender_name.' <'.$sender_email.'>' . "\r\n";

//send mail
$mail = mail( $to, $subject, $email_message, $headers );

if ( $mail ) {

	// Success message
	echo 'Your mail was sent successfully';
} else {

	// Error message
	echo 'Error';
}