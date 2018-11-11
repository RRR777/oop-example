<?php


namespace Weather\Api;

use Weather\Api\GoogleApi;

class GoogleRepository extends DbRepository
{

    protected function selectAll(): array
    {
        $result = [];
        $googleApi = new GoogleApi();
        if ($_GET['name'] === 'googleToday') {
            $data = $googleApi->getToday();
            $result[] = $data;
        } elseif ($_GET['name'] === 'googleWeek') {
            $data = $googleApi->getWeek();
            $result = $data;
        }

        return $result;
    }
}
