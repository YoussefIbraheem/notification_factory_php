<?php

use NotificationType;
use Twilio\Rest\Client;

class Sms implements NotificationType
{
    private Client $client;

    public function __construct(
        private string $senderNumber,
        private string $recepientNumber,
        private ?string $subject,
        private string $body,
    ) {
        $this->client = new Client();
    }


    #[Override]
    public function send()
    {
        $to = $this->recepientNumber;
        $from = $this->senderNumber;
        $subject = $this->subject;
        $body = $this->body;

        $this->client->messages->create($to, [
            "from" => $from,
            "subject" => $subject,
            "body" => $body
        ]);
    }
}
