<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class BibleStudyRespondent extends Respondent
{
    public static function shouldRespond($message, $longitude, $latitude)
    {
        return $message === Keywords::BIBLE_STUDY;
    }

    public function respond()
    {
        return Conversations::BIBLE_STUDY;
    }
}
