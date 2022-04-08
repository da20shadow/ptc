<?php

class StandardAd extends Ad
{

    public function setTimer(int $timer)
    {
        // TODO: Implement setTimer() method.
    }

    public function setPtcCredits(int $ptc_credits)
    {
        // TODO: Implement setPtcCredits() method.
    }

    public function setPricePerClick(float $price_per_click)
    {
        // TODO: Implement setPricePerClick() method.
    }
}

$standardAd = new StandardAd("Title","Description is here",15,100,0,01);
$title = $standardAd->getTitle();