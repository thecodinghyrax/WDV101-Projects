<?php

	$formEmailAddress = $_POST['email'];	//pull email address from the form data
	$formTopic = $_POST['topic'];			//pull topic from the form data

?>

<!doctype html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Contact form">
		<meta name="keywords" content="Contact, services, reference">
		<link rel="stylesheet" href="home-style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Tajawal&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="images/me.ico">
		<title>contact form response</title>

	</head>

	<body>


		<header>

			<img src="images/banner.webp" alt="misty landscape" class="banner" />

			<nav id="top">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="WDV101/homework.html">Projects (Homework)</a></li>
					<li><a href="interests.html">Interests</a></li>
					<li><a href="contact.html">Contact Me!</a></li>
					<li class="right"><a href="https://twitter.com/thecodinghyrax"><i class='fa fa-twitter'></i></a></li>
					<li class="right"><a href="https://github.com/thecodinghyrax"><i class='fa fa-github'></i></a></li>
					<li class="right"><a href="https://www.linkedin.com/in/andrew-crawford-ba0564116/"><i class='fa fa-linkedin'></i></a></li>
				</ul>
			</nav>

		</header>


		<section>

			<div class="main interests left">
				
			<?php

				//This code pulls the field name and value attributes from the Post file
				//The Post file was created by the form page when it gathered all the name value pairs from the form.
				//It is building a string of data that will become the body of the email

				// CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

				$toEmail = "$formEmailAddress";		//will send the email to the email address entered on the form 

				$subject = "Thank you for your message. I will contact you soon.";	//This is the message that will be sent back to the person who sent you a message from your contact form. 

				//$fromEmail = "contact@carinmurphy.com";		//Change the email address within the quotes to be YOUR host server email address.  
				$fromEmail = "drew@webdevdrew.com";		//Change the email address within the quotes to be YOUR host server email address.  

				//   DO NOT CHANGE THE FOLLOWING LINES  //

				$emailBody = "Form Data\n\n";			//stores the content of the email
				foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
				{
					$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
				} 

				$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

				if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
				{
					echo("<h1 class='success'>Message successfully sent!</h1><br>");
					echo("<p>Here is the information we submitted for you:</p><br>");
				} 
				else 
				{
					echo("<h1 class='error'>Message delivery failed...</h1><br>");
					echo("<p>Please review the information we tried to send and submit a new contact request</p><br>");
				}

				// Creating a custom table lets me use display names instead of the 
				// shortened ones that are passed in the post request. This looks better
				// and could potentionally hide database schema names
				echo "<table>";
				echo "<tr><th>Form Field</th><th>User Data</th></tr>";
				echo "<tr><td>First Name</td><td>", $_POST['first_name'], "</td></tr>";
				echo "<tr><td>Last Name</td><td>", $_POST['last_name'], "</td></tr>";
				echo "<tr><td>Email</td><td>", $_POST['email'], "</td></tr>";
				echo "<tr><td>Phone</td><td>", $_POST['phone'], "</td></tr>";
				echo "<tr><td>Contact preference</td><td>", $_POST['contact_method'], "</td></tr>";
				echo "<tr><td>Good contact time</td><td>", $_POST['time'], "</td></tr>";
				echo "<tr><td>Help with?</td><td>";
				$nHelp = $_POST['help'];
				if(empty($nHelp))
				{
					echo "This is empty";
				}
				else
				{
					$N = count($nHelp);
					for($i=0; $i < $N; $i++)
					{
						echo($nHelp[$i]."; ");
					}
				}
				echo "</td></tr>";
				echo "<tr><td>Reference?</td><td>", $_POST['reference'], "</td></tr>";
				echo "<tr><td>Comments</td><td>", $_POST['comments'], "</td></tr>";
				echo "</table";
				
				?>

			</div>

		</section>


		<section>

			<!-- Left hand side bar for images with links -->
			<div class="side right">

				<h1>Involvments</h1>
				<div>
					<a href="https://www.extra-life.org/participant/Andrew-Crawford-2022">
						<img class="side-photo" src="images/extra+life+logo1.webp" alt="Extra Life logo">
					</a>
				</div>
				<div>
					<a href="https://www.renewedhope.us">
						<img class="side-photo" src="images/RH.webp" alt="Extra Life logo">
					</a>
				</div>
				<div>
					<a href="https://www.dmacc.edu">
						<img class="side-photo" src="images/logo-dmacc.webp" alt="Extra Life logo">
					</a>
				</div>
				<div>
					<a href="http://www.stpaulankeny.org/">
						<img class="side-photo" src="images/stpaul.webp" alt="Extra Life logo">
					</a>
				</div>

			</div>

		</section>


	</body>

</html>
