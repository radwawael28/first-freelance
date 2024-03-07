<?php
$name =$_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$formcontent="From: $name <br> \r\n Message: $message";
$to = "rad.wael@nu.edu.eg";
$subjectform = "website subject: $subject";
$mailheader = "From: $email \r\n".
"Content-Type: text/html; charset=utf-8\r\n";
$mail_status = mail($to, $subjectform, $formcontent, $mailheader);


if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
     alert('Thank you for the message. We will contact you shortly.');
        history.back(1);
    </script>
<?php
}
 
else { ?>
   <script language="javascript" type="text/javascript">
     alert('Message failed. Please, send an email to info@buddhabar-eg.com');
        history.back(1);
    </script>
<?php
}
?>

