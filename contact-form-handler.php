
<?php
	include 'include/header.php';
	if(isset($_POST["submit"])){
		
   $name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	// $sql = "INSERT INTO `contact` (`contact_id`, `name`, `email`, `mobile_number`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$number', '$subject', '$message')";
	// 	$result = mysqli_query($conn, $sql);

	//mail	 
$to = "mohudoomnaina2@gmail.com";
$subject = $subject;

$message = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h3 style='text-align:center;'>Contact Form</h3>
<hr><br>
<table style='text-align:center;' border='1'>
<tr style='text-align:center;'>
<th>User Name</th>
<th>User Mobile Number</th>
<th>User Email</th>
<th>User Message</th>
</tr>
<tr style='text-align:center;'>
<td>$name</td>
<td>$number</td>
<td>$email</td>
<td>$message</td>
</tr>
</table>
<br>
<hr>
<center><button style='text-align:center;'><a href='http://projects.verifiedwork.com/amazetravelhub/demo' style='text-decoration:none;color:black;'>Go To Website</a></button></center>
<hr>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// More headers
$headers .= 'From: <mohudoomnaina786123@gmail.com>' . "\r\n";

$maill = mail($to,$subject,$message,$headers);
		
		if($maill){
		
		echo "<script LANGUAGE='JavaScript'>
		 alert('SUCCESSFULLY SENT YOUR MESSAGE...'); 
		 window.location.href='contact.php';
		 </script>";
		}
	}
		?>
