

<?php



if($_POST["submit"]) {
	$fname = $_POST["firstname"];
	$lstname = $_POST["lastname"];
	$fullname = $_POST["fname"] ["lstname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$position = $_POST["position"];
	$message = $_POST["message"];
	$resume = $_POST["resume"];
    $recipient = "info@cherrycocreative.com";
    
    $subject = "$position, $fullname";

      $mailBody="Name: $fullname\nEmail: $email\n\nPhone: $phone\n\nPosition: $position\n\nMessage: $message";

    mail($recipient, $subject, $mailBody, "From: $fname, $lstname <$email>") or die("Error!");
    echo "Thank You!" . " -" . "<a href='http://www.shawslancaster.com' style='text-decoration:none;color:#ff0099;'> back to Shaw's Restaurant Home</a>";

    
}

?>