<?php

class Ad
{
    private $title;
    private $description;
    private $timer;
    private $ptc_credits;
    private $price_per_click;
    private $status;

    /**
     * @param $title
     * @param $description
     * @param $timer
     * @param $ptc_credits
     * @param $price_per_click
     * @param $status
     */
    public function __construct($title, $description, $timer, $ptc_credits, $price_per_click, $status)
    {
        $this->title = $title;
        $this->description = $description;
        $this->timer = $timer;
        $this->ptc_credits = $ptc_credits;
        $this->price_per_click = $price_per_click;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * @param mixed $timer
     */
    public function setTimer($timer): void
    {
        $this->timer = $timer;
    }

    /**
     * @return mixed
     */
    public function getPtcCredits()
    {
        return $this->ptc_credits;
    }

    /**
     * @param mixed $ptc_credits
     */
    public function setPtcCredits($ptc_credits): void
    {
        $this->ptc_credits = $ptc_credits;
    }

    /**
     * @return mixed
     */
    public function getPricePerClick()
    {
        return $this->price_per_click;
    }

    /**
     * @param mixed $price_per_click
     */
    public function setPricePerClick($price_per_click): void
    {
        $this->price_per_click = $price_per_click;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

}