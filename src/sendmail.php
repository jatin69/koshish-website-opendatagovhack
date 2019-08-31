<?php
// Check for empty fields

if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['subject']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$message = str_replace("\n.", "\n..", $message);

// Create the email and send the message
$to = 'koshish.odgh@gmail.com'; // Add your email address This is where the form will send a message to.

$email_subject = "Koshish Connect: From $name : About - $subject";
$email_body = "You have received a new message from Koshish's contact form.\n\n" . "Here are the details:\n\n
Name: $name\n
Email: $email_address\n
Phone: $phone\n
Message: $message\n\n";
$headers = "From: connect@koshish.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
$issent = mail($to, $email_subject, $email_body, $headers);

//return true;
if ($issent) {
    ?>
<script language="javascript">
alert("Message Successfully Sent. We will contact you shortly.")
window.location.href = 'index.php';
</script>
<?php
} else {
    ?>
<script language="javascript">
alert("Error !! Please Try Again later.")
window.location.href = 'index.php';
</script>
<?php

}
?>
