<?php

namespace App\Respondents;

use App\Contracts\Respondent as RespondentContract;

abstract class Respondent implements RespondentContract
{
    public function __construct($message,?string $longitude, ?string $latitude)
    {
        $this->countryOrCountryCode = $message;
        $this->longitude = (float)  $longitude;
        $this->latitude = (float)  $latitude;
    }
}
