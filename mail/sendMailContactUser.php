<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

require("mail/PHPMailer/Exception.php");
require("mail/PHPMailer/PHPMailer.php");
require("mail/PHPMailer/SMTP.php");


if (isset($_POST['submit'])) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;      //xác thực SMTP
    //Enable SMTP authentication
    $mail->Username   = 'thang0909vnwork@gmail.com';                     //SMTP username
    $mail->Password   = 'mxjzgupkxnlqjdzk';                               //SMTP password
    //Enable implicit TLS encryption
    $mail->Port       = 587;
    $mail->SMTPSecure = "tls";
    $mail->CharSet  = 'UTF-8';
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fromthang0909vnwork@gmail.com', 'Tropical-Land Khách hàng');  //địa chỉ email người gửi

    $mail->addAddress('maiducthang0909@gmail.com', 'Mr. Thang');     //Add a recipient, địa chỉ người nhận
    $mail->addAddress('thangmdfx12498@funix.edu.vn', 'Thangden');

    $mail->Subject = 'Khách hàng cà phê';
    $mail->isHTML(false);
    $mail->Body = <<<EOT
        Yêu cầu từ khách hàng:
        Email: {$_POST['email']}
        Tên: {$_POST['name']}
        Điện thoại: {$_POST['phone']}
        Về vấn đề: {$_POST['heading']}
        Lời nhắn: {$_POST['text_area']}
    EOT;
    if (!$mail->send()) { //gửi mail
        $msg = 'Có lỗi! Thông tin chưa được gửi, vui lòng thử lại.';
    } else {
        $msg = 'Xin cảm ơn quý khách, thông tin đã được gửi thành công. Đội ngũ công ty sẽ liên hệ với bạn sớm nhất!';
    }
}
