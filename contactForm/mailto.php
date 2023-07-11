<?php
$Name = $_POST['fname'];
$Emails = $_POST['email'];
$Phone = $_POST['number'];
$Message = $_POST['message'];
echo "Name :". $Name. '<br>';
echo "Email :". $Emails. '<br>';
echo "Phone :". $Phone. '<br>';
echo "Message :". $Message.'<br>';

use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'mail.grinfotech.com';
        $mail->SMTPAuth = true; 
        $mail->Username = 'jayachandran@grinfotech.com';
        $mail->Password = 'Bgt56yhN@';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //Recipients
        $mail->setFrom($Emails);
        $mail->addAddress($Emails);



        //Content
        $mail->isHTML(true);
        $mail->Subject = "Message from customer";
        $mail->Body    = "
        <p><b>Name :</b> ".$Name."</p>
        <p><b>Phone :</b> ".$Phone."</p>
        <p><b>Message : </b> ".$Message." </p>";

        $mail->send();
        // echo 'Message has been sent';
        header('Location: index.php');
        exit();
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>
