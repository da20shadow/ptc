<?php

class ExceptionMessages
{
    //Universal Exceptions
    public final const EMPTY_STRING = " field is empty!";

    //User Exceptions
    public final const INVALID_USERNAME_LENGTH = "The username must be between 8 - 45 characters!";
    public final const INVALID_USERNAME_CHARACTERS = "The username must contains only letters, digits and underscore!";
    public final const INVALID_PASSWORD_LENGTH = "The password must be between 8 - 45 characters!";

    //Ads Exceptions
    public final const INVALID_AD_TITLE_LENGTH = "The title must be between 15 - 75 characters";
    public final const INVALID_AD_DESCRIPTION_LENGTH = "The description must be between 15 - 145 characters";
}