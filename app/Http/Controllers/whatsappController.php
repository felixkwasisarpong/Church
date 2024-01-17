<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Twilio\TwiML\MessagingResponse;
use App\Factories\RespondentFactory;
       

class whatsappController extends Controller
{
    public function __invoke(MessagingResponse $messageResponse)
    {

    Log::debug("gets here");
   
//print $response;
        $respondent = RespondentFactory::create();
        $response = new MessagingResponse;
        Log::debug(count($respondent->respond()));
        if(count($respondent->respond())==2){
            $message = $response->message($respondent->respond()[0]);
            $message->body("");
            $message->media($respondent->respond()[1]);
        }else{
            $message = $response->message($respondent->respond()[0]);
        }
       
       // Log::debug($response);
        return response($response, 200)->header(
            'Content-Type',
            'text/xml'
        );
    }
}
