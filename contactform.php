<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];  
    
    $mailTo ="info@samlanskyprofile.com";
    $headers = "From: ".$email;
    $txt = "You Have received an e-mail from".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}   

?>