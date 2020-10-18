
<html>

<body>
<div class="container">
<!-- to display a form to enter the feedback
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
<?php
//This is to send the mail
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email . "rn"; // Sender's Email
$headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($email, $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>

</div>
<!-- Feedback Form Ends Here -->
</div>
</body>
</html>
