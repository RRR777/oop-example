<?php

namespace Weather\Model;

class Weather
{
    private $map = [
        1 => 'cloud',
        2 => 'cloud-rain',
        3 => 'sun',
        "Cloudy" => 'cloud',
        "Scattered Showers" => 'cloud-rain',
        "Breezy" => 'sun',
        "Partly Cloudy" => 'cloud',
        "Mostly Cloudy" => 'cloud'
        ];

    /**
     * @var integer
     */
    protected $dayTemp;

    /**
     * @var integer
     */
    protected $nightTemp;

    /**
     * @var string
     */
    protected $sky;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @return int
     */
    public function getDayTemp(): int
    {
        return $this->dayTemp;
    }

    /**
     * @param int $dayTemp
     */
    public function setDayTemp(int $dayTemp): void
    {
        $this->dayTemp = $dayTemp;
    }

    /**
     * @return int
     */
    public function getNightTemp(): int
    {
        return $this->nightTemp;
    }

    /**
     * @param int $nightTemp
     */
    public function setNightTemp(int $nightTemp): void
    {
        $this->nightTemp = $nightTemp;
    }

    /**
     * @return string
     */
    public function getSky(): string
    {
        return $this->sky;
    }

    /**
     * @param string $sky
     */
    public function setSky(string $sky): void
    {
        $this->sky = $sky;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getSkySymbol()
    {
        return $this->map[$this->sky];
    }
}
