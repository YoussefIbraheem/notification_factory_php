<?php

use EmailCreator;
use SmsCreator;

class NotificationHandler
{
    public static function sendEmail(
        string $senderEmail,
        string $receipientEmail,
        ?string $subject,
        string $senderName,
        string $receipientName,
        string $body
    ) {
        $mail = new EmailCreator(
            $senderEmail,
            $receipientEmail,
            $subject,
            $senderName,
            $receipientName,
            $body
        );

        $mail->send();
    }

     public static function sendSms(
        string $senderEmail,
        string $receipientEmail,
        ?string $subject,
        string $senderName,
        string $receipientName,
        string $body
    ) {
        $mail = new SmsCreator(
            $senderEmail,
            $receipientEmail,
            $subject,
            $senderName,
            $receipientName,
            $body
        );

        $mail->send();
    }
}
