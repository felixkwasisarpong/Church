<?php

namespace App\Factories;

use App\Respondents\InvalidKeywordRespondent;
use App\whatsapp;
use Illuminate\Support\Facades\Log;
class RespondentFactory
{
    protected $respondent;
  

    /** @var string */
    protected $phoneNumber;

    /** @var string */
    protected $message;

    /** @var string */
    protected $longitude;

    /** @var string */
    protected $latitude;

    public function __construct(string $phonenumber, ?string $message, ?string $longitude, ?string $latitude)
    {
        $this->phoneNumber = $phonenumber;
        $this->message = $message;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->respondent = $this->resolveResponder($this->message, $this->longitude, $this->latitude);
    }


    public static function create()
    {
        $self =  new static(
            request()->input('From'),
            request()->input('Body'),
            request()->input('Longitude'),
            request()->input('Latitude')
        );

        return $self->respondent;
    }

    public function saveContact($phonenumber)
    {
        return whatsapp::firstOrCreate([
            "phonenumber" => $phonenumber
        ]);
    }

    protected function normalizeMessage($message)
    {
        if (strcasecmp($message, "hi") === 0) {
            return trim(strtolower($message));
        }

        if (strlen($message) === 2) {
            return strtoupper($message);
        }

        return $message;
    }

    public function resolveResponder(?string $message, ?string $longitude, ?string $latitude)
    {$message =  $this->normalizeMessage($message);

        $responders = $this->getRepondents();

        foreach ($responders as $responder) {
            if ($responder::shouldRespond($message, $longitude, $latitude)) {
                return new $responder($message, $longitude, $latitude);
            }
        }

        return new InvalidKeywordResponder($this->message, $this->longitude, $this->latitude);
    }

    public function getRepondents()
    {
        return config('whatsapp.respondents');
    }
}
