<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class ChurchMomoRespondent extends Respondent
{
    public static function shouldRespond($message, $longitude, $latitude)
    {
        return $message === Keywords::CHURCH_MOMO;
    }

    public function respond()
    {
        return Conversations::CHURCH_MOMO;
    }
}
