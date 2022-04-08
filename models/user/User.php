<?php

abstract class User
{
    private string $username;
    private string $email;
    private string $password;

    /**
     * @param $username
     */
    public function __construct($username)
    {
        $this->setUsername($username);
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    private function setUsername(string $username): void
    {
        try {
            $this->username = UserDataValidator::validateUsername($username);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



}