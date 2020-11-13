<?php

//Hint - Dependency Inversion Principle
class Mailer()
{
    private $settings;
    private $connection;

    public function __construct($settings,$connection)
    {
       $this->settings = $settings;
       $this->connection = $connection;
    }

}

class SendWelcomeMessage
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}
class SendWelcomeGoolge
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

class SendWelcomeMailchimp
{
    private $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

//SendWelcomeGoolge
//SendWelcomeSendgrid
//SendWelcomeMailchimp
