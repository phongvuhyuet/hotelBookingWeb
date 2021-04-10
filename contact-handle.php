<?php
    use PHPMailer\PHPMailer\PHPMailer;


    if (isset($_POST['name']) && isset($_POST['email'])) {
      $name = $_POST['name'];
      $emai = $_POST['email'];
      $subject = $_POST['subject'];
      $body = $_POST['body'];

      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php"; 


      $mail = new PHPMailer\PHPMailer\PHPMailer();


      $mail->isSMTP();  
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'ecolovecat4@gmail.com';                     //SMTP username
      $mail->Password   = '01663803816'; 
      $mail->Port       = 465;  
      $mail->SMPTSecure = 'ssl';

      $mail->isHTML(true);     
      $mail->setFrom($email, $name);
      $mail->addAddress('ecolovecat5@gmail.com');     //Add a recipient
      $mail->Subject = $subject;
      $mail->Body    = $body;
    }