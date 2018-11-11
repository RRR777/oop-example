<?php

namespace Weather;

use Weather\Api\DataProvider;
use Weather\Api\DbRepository;
use Weather\Api\GoogleRepository;
use Weather\Api\JsonRepository;
use Weather\Model\Weather;

class Manager
{
    /**
     * @var DataProvider
     */
    private $transporter;

    public function getTodayInfo(): Weather
    {
        return $this->getTransporter()->selectByDate(new \DateTime());
    }

    public function getWeekInfo(): array
    {
        return $this->getTransporter()->selectByRange(new \DateTime(), new \DateTime('+8 days'));
    }

    private function getTransporter()
    {
        switch ($_GET['name']) {
            case 'week':
                $this->transporter = new DbRepository();
                break;
            case 'googleToday':
                $this->transporter = new GoogleRepository();
                break;
            case 'googleWeek':
                $this->transporter = new GoogleRepository();
                break;
            case 'todayWeatherjson':
                $this->transporter = new JsonRepository();
                break;
            case 'weekWeatherjson':
                $this->transporter = new JsonRepository();
                break;
            case '/':
            default:
                $this->transporter = new DbRepository();
                break;
        }

        return $this->transporter;
    }
}


