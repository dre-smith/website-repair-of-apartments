<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
$userName = $_POST['username'];
$userPhone = $_POST['phone'];
$userEmail = $_POST['email'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно отправлена";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'username1@gmail.com';
    $mail->Password   = 'password';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('username1@gmail.com', 'Glo Academy');
    $mail->addAddress('username2@gmail.com');
        $mail->isHTML(true);
    
        $mail->Subject = 'Форма';
        $mail->Body    = "<b>Имя:</b> $userName <br>
        <b>Телефон:</b> $userPhone <br>
        <b>Электронная почта:</b> $userEmail <br>";
if ($mail->send()) {
    header('Location: thanks.php');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}