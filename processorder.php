<head>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
require 'header.html'; // Include the header

// Generic body content
?>

<div id="content">
    <div class="cart">
		<?php
		//create short variable names
		$name=$_POST['name'];
		$email=$_POST['email'];
		$feedback=$_POST['feedback'];

		//set up some static information
		$toaddress = "19ggallagher@gmail.com";

		$subject = "Feedback from web site";

		$mailcontent = "Customer name: ".$name."\n".
					   "Customer email: ".$email."\n".
					   "Customer comments:\n".strtoupper($feedback)."\n";

		$fromaddress = "From: webserver@example.com" ."\r\n".
						"Cc: 19ggallagher@gmail.com" ."\r\n".
						"Reply-To: ggallag4@emich.edu";


		//invoke mail() function to send mail
		mail($toaddress, $subject, $mailcontent, $fromaddress);
		?>

    <h1>Feedback submitted</h1>
    <p>Your feedback has been sent.</p>

	</body>
</html>