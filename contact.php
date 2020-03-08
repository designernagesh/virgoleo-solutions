<?php
if(isset($_POST['email'])){
	$to 		= 'designer.nagesh@gmail.com'; 
	$send_date 	= date('d-m-Y H:i:s');
	$subject 	= 'Customer Contact';
	$message 	= '
	<p>Data &amp; Time: '.$send_date.'</p>
	<table>
	<tr>
	<td><strong>Name:</strong> '.$_POST['name'].'</td>
	</tr>
	<tr>
	<td><strong>E-Mail:</strong> <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a></td>
	</tr>
	<tr>
	<td><strong>Phone:</strong>  '.$_POST['phone'].'</td>
	</tr>
	<tr>
	<td><strong>Message:</strong>  '.$_POST['msg'].'</td>
	</tr>
	</table>
	';
	
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: " . $_POST['name'] . "<" . $_POST['email'] . ">\r\n";
	
	mail($to, $subject, $message, $headers);
	
	header('Location: thank-you.html');
	
	$usermail = $_POST['email'];
	$usermessage = "Thank you for your interest. We will get back to you as soon as possible.<br /><br /><br />
	
				  Thanks,<br /><br />
				  
				  Best Regards,<br />
				  <strong>Virgo-Leo Solutions</strong><br />
				  http://virgoleosolutions.com";
				  
	$usersubject = "Confirmation from Virgo-Leo Solutions";
	
	$userheaders = "From: $to\r\n";
	$userheaders .= "Content-type:  text/html\r\n";
	mail($usermail, $usersubject, $usermessage, $userheaders);
}
?>
