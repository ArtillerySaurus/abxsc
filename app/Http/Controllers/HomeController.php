<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class HomeController extends Controller
{

    private $selectedSeason;
    private $availableSeasons;

    function __construct(Request $request){



    }

    public function start(Request $request){

        $seasons = $this->getAllSeasons($request);

        // dd($seasons);

        return view('home')->with(["seasons" => $seasons]);

    }

    private function getAllSeasons(Request $request = null){

        $seasonController   = new SeasonController($request);
        $seasons            = $seasonController->getAllSeasons();

        return $seasons;

    }

}
