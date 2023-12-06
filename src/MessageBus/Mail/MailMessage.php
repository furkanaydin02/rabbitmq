<?php

namespace App\MessageBus\Mail;

class MailMessage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $to;

    /**
     * MailMessage constructor.
     */
    public function __construct(int $id, string $type, string $locale, string $to)
    {
        $this->id     = $id;
        $this->type   = $type;
        $this->locale = $locale;
        $this->to     = $to;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): MailMessage
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): MailMessage
    {
        $this->type = $type;

        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): MailMessage
    {
        $this->locale = $locale;

        return $this;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): MailMessage
    {
        $this->to = $to;

        return $this;
    }
}
