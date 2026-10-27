<?php

use NotificationType;


class Email implements NotificationType
{

    public function __construct(
        private string $senderEmail,
        private string $recepientEmail,
        private ?string $subject,
        private string $body

    ) {}




    #[Override]
    public function send()
    {
        $to = $this->recepientEmail;
        $from = $this->senderEmail;
        $subject = $this->subject;
        $message = $this->body;
        
        $headers =  "From: " . $from . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        // sending mail mechanism
    }
}
