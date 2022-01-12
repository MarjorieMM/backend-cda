<?php


class Email
{
    private string $email;
    private string $pattern = '/^([a-zA-Z0-9-_]+@[a-zA-Z0-9-_]+.[a-zA-Z]{1,3})$/';
    private array $spams = ["bogus.com", "spam.net", "youhou.fr"];
    private int $error = 0;


    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getDomain()
    {
        return explode('@', $this->email)[1];
    }

    public function checkValidEmail(): bool
    {
        if (preg_match($this->pattern, $this->email)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkSpamEmail(): bool
    {
        foreach ($this->spams as $spam) {
            if ($spam === $this->getDomain()) {
                $this->error += 1;
            }
        }
        if ($this->error > 0) {
            return true;
        } else {
            return false;
        }
    }
}