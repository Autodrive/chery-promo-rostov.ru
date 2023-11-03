<?php

require_once '../ajax/Mailer/class.phpmailer.php';

class CMailer
{
    /**
     * @var PHPMailer
     */
    private static $mailer;

    /**
     * @return PHPMailer
     */
    public static function mailer()
    {
        if (!self::$mailer)
        {
            $mail = new PHPMailer();
            $mail->CharSet = "UTF-8";
            $mail->IsHTML(true);
            $mail->isMail();
//             $mail->SMTPDebug = 4;

            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.yandex.ru";
            $mail->Port = 465;
            $mail->Username = "unclecrutch@yandex.ru";
            $mail->Password = "XRp5AMcdcSK8T6ff";

            self::$mailer = $mail;
        }

        // зачистка
        self::$mailer->ClearAllRecipients();
        self::$mailer->ClearAddresses();
        self::$mailer->ClearAttachments();
        return self::$mailer;
    }
}

function sendmail($to, $subject, $message)
{
    // бьем через запятую
    $addresses = explode(',', $to);

    $mailer = CMailer::mailer();
    $mailer->From = 'unclecrutch@yandex.ru';
    $mailer->FromName = 'avto-dlya-vas';

    foreach ($addresses as $address) {
        $mailer->AddAddress($address);
    }

    $mailer->Body = $message;
    $mailer->Subject = $subject;

    if (! $mailer->send())
    {
        echo '<pre>';
        print_r($mailer->ErrorInfo);
        echo '</pre>';
        return false;
    }

    return true;
}