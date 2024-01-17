<?php

namespace App\Contracts;

interface Respondent
{

  

    public static function shouldRespond(?string $message, ?string $longitude, ?string $latitude);

    public function respond();
}
