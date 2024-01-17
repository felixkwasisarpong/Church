<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class NearbyCellRespondent extends Respondent
{
    public static function shouldRespond($message, $longitude, $latitude)
    {
        return $longitude && $latitude;
    }


    public function respond()
    {

        $locations = \App\cell::get();
        if(count($locations == 0)){
            return ["No Cell Groups"];
        }else{
        $closestLocation = $this->findClosestLocation($this->longitude, $this->latitude, $locations);
 
        // Generate Google Maps link
        $googleMapsLink = "https://www.google.com/maps/search/?api=1&query=$closestLocation->latitude,$closestLocation->longitude";

        return ["Name of Cell group: {$closestLocation->name} \nCell Leader: {$closestLocation->cell_lead_name}\nContact: {$closestLocation->contact_number} \n{$googleMapsLink}"];
    }
}

    private function findClosestLocation($userLatitude, $userLongitude, $locations)
    {
        $closestLocation = null;
        $minDistance = PHP_INT_MAX;

        foreach ($locations as $location) {
            $distance = $this->haversine($userLatitude, $userLongitude, $location->latitude, $location->longitude);

            if ($distance < $minDistance) {
                $minDistance = $distance;
                $closestLocation = $location;
            }
        }

        return $closestLocation;
    }

    private function haversine($lat1, $lon1, $lat2, $lon2)
    {
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon / 2) ** 2;
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        // Earth radius (in kilometers)
        $radius = 6371;

        // Haversine formula
        $distance = $radius * $c;

        return $distance;
    }

}
