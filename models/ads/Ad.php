<?php

abstract class Ad
{
    private string $title;
    private string $description;
    private int $timer;
    private int $ptc_credits;
    private float $price_per_click;
    private bool $running;

    /**
     * @param string $title
     * @param string $description
     * @param int $timer
     * @param int $ptc_credits
     * @param float $price_per_click
     * @param bool $running
     */
    public function __construct(string $title, string $description, int $timer, int $ptc_credits, float $price_per_click, bool $running)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setTimer($timer);
        $this->setPtcCredits($ptc_credits);
        $this->setPricePerClick($price_per_click);
        $this->running = $running;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    private function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    private function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getTimer(): int
    {
        return $this->timer;
    }

    /**
     * @param int $timer
     */
    protected abstract function setTimer(int $timer);

    /**
     * @return int
     */
    public function getPtcCredits(): int
    {
        return $this->ptc_credits;
    }

    /**
     * @param int $ptc_credits
     */
    protected abstract function setPtcCredits(int $ptc_credits);

    /**
     * @return float
     */
    public function getPricePerClick(): float
    {
        return $this->price_per_click;
    }

    /**
     * @param float $price_per_click
     */
    protected abstract function setPricePerClick(float $price_per_click);

    /**
     * @return bool
     */
    public function isRunning(): bool
    {
        return $this->running;
    }

    /**
     * @param bool $running
     */
    protected function setRunning(bool $running): void
    {
        $this->running = $running;
    }


}