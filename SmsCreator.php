<?php

use Sms;
use NotificationFactory;


class SmsCreator extends NotificationFactory
{

    public function __construct(
        private string $senderNumber,
        private string $recepientNumber,
        private ?string $subject,
        private string $senderName,
        private string $recepientName,
        private string $body
    ) {}


    protected function formatMessageBody(): string
    {
        return "Dear " . $this->recepientNumber . "\r\n" .
            $this->body . "\r\n" .
            "Regards,\n" .
            $this->senderName . "\r\n";
    }


    #[Override]
    protected function createMessage(): Sms
    {
        return new Sms(
            $this->senderNumber,
            $this->recepientNumber,
            $this->subject,
            $this->body,
        );
    }
}
