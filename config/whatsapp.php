<?php

use App\Respondents\GreetRespondent;
use App\Respondents\ViewprogramsRespondent;
use App\Respondents\MainMenuRespondent;
use App\Respondents\ChurchMomoRespondent;
use App\Respondents\NearbyCellRespondent;
use App\Respondents\ShareRespondent;
use App\Respondents\BibleStudyRespondent;

return [
    "respondents" => [
        GreetRespondent::class,
        ViewprogramsRespondent::class,
        ChurchMomoRespondent::class,
        NearbyCellRespondent::class,
        BibleStudyRespondent::class,
        ShareRespondent::class,
        MainMenuRespondent::class
    ]
];
    