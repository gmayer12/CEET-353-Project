<head>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
require 'header.html'; // Include the header

?>

<div id="content">
    <div class="cart">
		<?php
		//create short variable names
		$name=$_POST['name'];
		$email=$_POST['email'];
		$notes=$_POST['notes'];

		//set up some static information
		$toaddress = "ggallag4@emich.edu";

		$subject = "Order Request";

		$subtotal = $_COOKIE['subtotal'];
		$photos = $_COOKIE['cartItems'];

		$mailcontent = "Customer name: ".$name."\n".
					   "Customer email: ".$email."\n".
					   "Total: $". json_decode($subtotal, true)."\n".
					   "Photos: ". $photos ."\n".
					   "Customer notes: ".$notes."\n";

		$fromaddress = "From: 19ggallagher@gmail.com" ."\r\n".
						"Cc: 19ggallagher@gmail.com" ."\r\n".
						"Reply-To: ggallag4@emich.edu";


		//invoke mail() function to send mail
		mail($toaddress, $subject, $mailcontent, $fromaddress);
		?>

    <h1>Feedback submitted</h1>
    <p>Your feedback has been sent.</p>
	<?php
// Specify the file path and name
$filePath = 'file.txt';


file_put_contents($filePath, $mailcontent);

echo "Text document created successfully at: $filePath";
?>

	</body>
</html>