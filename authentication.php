<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$email = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["subject"];
$massege = $_POST["message"];


$dbms = new mysqli("localhost", "root", "@Duleekaduleeka123", "barber_db", "3306");
$quary = "INSERT INTO `feedback` (`name`,`email`,`subject`,`message`) VALUES ('" . $name . "','" . $email . "','" . $subject . "','" . $massege . "')";

$me = 'boydewanga@gmail.com';


$dbms->query($quary);


$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $me;
$mail->Password = 'ffiejabwpzjyjroh';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom($me);
$mail->addReplyTo($me);
$mail->addAddress($email, $me);
$mail->isHTML(true);
$mail->Subject = $subject;
$bodyContent = $name . '<div style="background-color: whitesmoke; width: 100%; height: auto;" class="">
<br>
<img style="margin-left: 42%; width: 150px;" src="https://i.ibb.co/ygpYVxV/3dgifmaker13300.gif">
<h1 style="color: black; margin: 0; font-size: 40px; margin-left: 36%;">Barber Shop</h1>
<br>
<br>

<h4 style="margin-left: 5%; font-size: 20px; margin-top: 10px; color: blue;">'.$name.'</h4>
<h4 style="margin-left: 5%; font-size: 20px; margin-top: -0.5cm; color: blue;">'.$email.'</h4>
<h3 style="margin-left: 5%; font-size: 25px; margin-top: -0.5cm; color:blue;">'.$subject.'</h3>
<h5 style="text-decoration: underline; margin-left: 43%; margin-top: 2cm; font-size: 0.7cm;">FeedBack</h5>
<div style="margin: 10px; background-color: aqua; width: auto; height: auto;">
    <p style="font-size: 30px; margin-top: -0.5cm; margin-left: 5%;">'.$massege.'</p>
</div>
<br>
<br>
<h1 style="font-size: 15px; margin-left: 35%;">Click And Go Our Website <a style=" margin-left: 1%; background-color: blue; color: white; text-decoration: none;" href="http://localhost/barbershop/index.php"> Click Here</a></h1>
<br>
<h2 style=" width: 100%; height: 2cm; margin-top: 0.5cm; color: black; margin-left: 30%;">🥳🙂Thanks For Your Feedback🥳🥳</h2>
</div>';
$mail->Body = $bodyContent;


if (!$mail->send()) {
    echo 'Faild';
} else {
    echo 'Success';
}
