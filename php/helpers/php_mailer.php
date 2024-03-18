<?php
// Usar el sistema de autoload de composer
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$php_mailer = new PHPMailer(true);
$php_mailer->isSMTP();
$php_mailer->SMTPDebug = 3;
$php_mailer->Debugoutput = function ($str, $level) {
    file_put_contents('../php_mailer.log', gmdate('Y-m-d H:i:s') . "\t$level\t$str\n", FILE_APPEND | LOCK_EX);
};
$php_mailer->Host = "smtp.hostinger.com"; //"smtp.gmail.com";
$php_mailer->Port = 587;
$php_mailer->SMTPAuth = true;
$php_mailer->Username = "";
$php_mailer->Password = "";
$php_mailer->CharSet = 'UTF-8';
$php_mailer->Encoding = "quoted-printable";
?>