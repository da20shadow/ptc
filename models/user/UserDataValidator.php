<?php

class UserDataValidator
{
    /**
     * @throws Exception
     */
    public static function validateString($string): string
    {
        if ($string == null || trim($string) == ""){
            throw new Exception(ExceptionMessages::EMPTY_STRING);
        }
        $string = trim($string);
        return htmlspecialchars($string);
    }

    /**
     * @throws Exception
     */
    public static function validateUsername($username): string
    {
        if ($username == null){
            throw new Exception("Username" . ExceptionMessages::EMPTY_STRING);
        }else if (strlen($username) < 8 || strlen($username)){
            throw new Exception(ExceptionMessages::INVALID_USERNAME_LENGTH);
        }
        $username = trim($username);
        return htmlspecialchars($username);
    }
}