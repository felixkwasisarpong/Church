<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;
use App\WeeklyProgram;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ViewprogramsRespondent extends Respondent
{
    public static function shouldRespond($message, $longitude, $latitude)
    {
        return $message === Keywords::VIEW_PROGRAMS;
    }

    public function respond()
    {
      $date = Carbon::now();
      $formatedDate = $date->format('Y-m-d');   
      $data =  WeeklyProgram::where('endDate','>=',$formatedDate)->get();

      if(count($data) == 0){
        return ["No program"];
      }else{
        Log::debug($data);
        foreach($data as $item){
        
            return ["Program: $item->title \n$item->desc","https://unsplash.com/photos/_86u_Y0oAaM/download?ixid=M3wxMjA3fDB8MXxzZWFyY2h8Mnx8Y2h1cmNofGVufDB8fHx8MTY5ODM4MzMwMXww&force=true"];
        }
    }
    }
}
