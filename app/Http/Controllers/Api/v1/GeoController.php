<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Geocoder\Geocoder;
use Illuminate\Support\Facades\Response;
use Geodistance\Location;
use function Geodistance\meters;

class GeoController extends Controller
{
    public function address(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        $input = $request->all();

        $result = $client->post("https://maps.googleapis.com/maps/api/geocode/json?language=ru&latlng=".$input['lat'].",".$input['lng']."&key=".config('geocoder.key'));
        
        $json = json_decode($result->getBody());

        $number_house = $json->results["0"]->address_components["0"]->long_name;

        $street_name = $json->results["0"]->address_components["1"]->short_name;

       $res = $street_name.', д.'.$number_house;

       return response()->json([
            'data' => $res
        ]);
    }
}
