<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor1/autoload.php';

if (isset($_POST['mailSend'])) {
    $id = $_GET['id'];
    $email = $_POST['email'];


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.alutech.mn';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'alw@alutech.mn';                 // SMTP username
//    $mail->Username = 'qq080884@gmail.com';                 // SMTP username
//    $mail->Password = 'Tushig123';                           // SMTP password
        $mail->Password = 'Tushig123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('alw@alutech.mn', 'Mailer');
//    $mail->addAddress('tushig.0803@gmail.com', 'Joe User');     // Add a recipient
        $mail->addAddress($email);               // Name is optional
        $mail->addReplyTo('alw@alutech.mn', 'Information');
        $mail->addCC('alw@alutech.mn');
        $mail->addBCC('alw@alutech.mn');

        //Attachments
        $mail->addAttachment('helloWorld.docx');         // Add attachments
        /*    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo 'message has been sent!';

    echo "<script>window.location.replace('result.php?id=$id&mail=1');</script>";
//            echo "<script>alert('$error');</script>";
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}