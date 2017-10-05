<?php


// get required files
//require("../../config.secure.php");
require("../php/Mail.php");
require("../php/Mail/mime.php");
//require("dompdf/dompdf_config.inc.php");

// setup some template data

// use the template
//ob_start();
//require("resultSend.php");
//$html = ob_get_contents();
//ob_end_clean();

// turn that into a PDF

//$dompdf = new DOMPDF();
//$dompdf->load_html($html);
//$dompdf->set_paper("A4", "portrait");
//$dompdf->render();
//$pdfoutput = $dompdf->output();

// setup our email variables
$filename = "helloWorld.docx";
$from = "info@alutech_mn"; // ywuulah alutech mail bh estoi
$to = "tushig.0803@gmail.com"; // ochih mail hayg input-es awna
$message = "asdqwe";
$subject = "asdasdasdasdadasd";

// send the email
$mime = new Mail_mime();
$mime->setTXTBody($message);
$mime->setHTMLBody(nl2br($message));
$mime->addAttachment($filename,"Applition/word");
$body = $mime->get();
$headers = $mime->headers(array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
));
$smtp = Mail::factory('smtp', array(
    'host' => "ssl://smtp.gmail.com",
    'SMPTSecure' => "ssl",
    'port' => "465",
    'auth' => true,
    'username' => SMTP_EMIAL,
    'password' => SMTP_PASSWORD
));
$docFile = '/helloWorld.docx';
$mail->addAttachment($docFile, "hello.docx");

$mail = $smtp->send($to, $headers, $body);


// check for errors
if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent!</p>");
}
?>