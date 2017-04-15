<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

use App\Models\Season;
use App\Models\Tribe;
use App\Models\Player;
use App\Models\Creature;

class XmlController extends Controller
{

    private $requiredFields = array(
        "upload-database",
    );

    function __construct(Request $request){



    }

    public function upload(Request $request){

        $form_data      = $request->input();
        $missingFields  = $this->checkRequiredFields($form_data);

        if($missingFields){

            return Redirect::back()->withErrors(['Niet alle velden zijn ingevuld.']);

        }

        $file = Input::file('input-xml');

        if (!Input::hasFile('input-xml')) {

            return Redirect::back()->withErrors(['Wat valt er nou niet aan te snappen dat je een XML moet inlezen, eikel. It aint fucking rocket science -_- - Derovian']);

        }

        if (!Input::file('input-xml')->isValid()) {

            return Redirect::back()->withErrors(['Fout bij het lezen van bestand. Oops..?']);

        }

        if(Input::file('input-xml')->getClientOriginalExtension() != "xml"){

            return Redirect::back()->withErrors(['Dat was geen xml...']);

        }

        $destinationPath    = storage_path('xmls/upload');
        $extension          = Input::file('input-xml')->getClientOriginalExtension();
        $fileName           = Input::file('input-xml')->getClientOriginalName();
        $outputFile         = time() . '.' .$fileName;

        Input::file('input-xml')->move($destinationPath, $outputFile);

        // Check if file exists.
        $filePath = $destinationPath. '/' .$outputFile;

        if(!File::exists($filePath)){

            return Redirect::back()->withErrors(['Het bestand is serieus waar, spontaan verdwenen van de server...And its gone']);

        }

        // Parse file.
        try{

            $xml = File::get($filePath);

            $xmlContent = new \SimpleXMLElement($xml);

        }catch(Exception $e){

            return Redirect::back()->withErrors(['Iets is ontploft, programma is klaar met bestaan.']);

        }

        // Get season.
        $season = Season::where('number', $form_data['selected-season'])->first();

        // Get tribe.
        $xmlTribesProcessed = $this->handleXmlTribes($xmlContent->tribes);
        // Get players.
        $xmlPlayersProcessed = $this->handleXmlPlayers($xmlContent->players);
        // Get creatures.
        $xmlCreaturesProcessed = $this->handleXmlCreatures($xmlContent->creatures);
        // Up season version.
        if($season->databaseVersion <= 0){

            $season->databaseVersion = 1;

        }else{

            $season->databaseVersion =+ 0.1;

        }

        // Save season.
        $season->save();

        return Redirect::back()->withErrors(['Grote kans dat het opgeslagen is!']);// @TODO: Find some other way to do this!

    }

    private function handleXmlTribes($xmlTribes){

        foreach($xmlTribes->children() as $xmlTribe){

            $tribe = Tribe::firstOrNew(['name' => $xmlTribe->TribeName]);

            if(!$tribe->exists){

                $tribe->name = $xmlTribe->TribeName;

            }

            $tribe->relation = $xmlTribe->TribeRelation;
            $tribe->note     = $xmlTribe->Note;

            $tribe->save();

        }

    }

    private function handleXmlPlayers($xmlPlayers){

        foreach($xmlPlayers->children() as $xmlPlayer){

            $player = Player::firstOrNew(['name' => $xmlPlayer->PlayerName]);

            if(!$player->exists){

                $player->name = $xmlPlayer->PlayerName;

            }

            $player->tribe = $xmlPlayer->Tribe;
            $player->level = $xmlPlayer->Level;
            $player->note  = $xmlPlayer->Note;

            $player->save();

        }

    }

    private function handleXmlCreatures($xmlCreatures){

        foreach($xmlCreatures->children() as $xmlCreature){

            $creature = Creature::firstOrNew(['guid' => $xmlCreature->guid]);

            if(!$creature->exists){

                $creature->guid = $xmlCreature->guid;

                $creature->species          = $xmlCreature->species;
                $creature->name             = $xmlCreature->name;
                $creature->gender           = $xmlCreature->gender;
                $creature->status           = $xmlCreature->status;
                $creature->tamingEff        = $xmlCreature->tamingEff;
                $creature->imprintingBonus  = $xmlCreature->imprintingBonus;
                $creature->owner            = $xmlCreature->owner;
                $creature->note             = $xmlCreature->note;
                $creature->isBred           = $xmlCreature->isBred;
                $creature->fatherGuid       = $xmlCreature->fatherGuid;
                $creature->motherGuid       = $xmlCreature->motherGuid;
                $creature->generation       = $xmlCreature->generation;
                $creature->growingUntil     = $xmlCreature->growingUntil;
                $creature->cooldownUntil    = $xmlCreature->cooldownUntil;
                $creature->domesticatedAt   = $xmlCreature->domesticatedAt;
                $creature->neutered         = $xmlCreature->neutered;
                $creature->mutationCounter  = $xmlCreature->mutationCounter;

                $creature->levelsWild       = serialize((array)$xmlCreature->levelsWild);
                $creature->levelsDom        = serialize((array)$xmlCreature->levelsDom);
                $creature->colors           = serialize((array)$xmlCreature->colors);

            }

            $creature->status               = $xmlCreature->status;
            $creature->owner                = $xmlCreature->owner;
            $creature->note                 = $xmlCreature->note;
            $creature->neutered             = $xmlCreature->neutered;

            $creature->save();

        }

    }

    private function checkRequiredFields($data){

        $missingFields = array();

        foreach($this->requiredFields as $reqField){

            if(!array_key_exists($reqField, $data) || empty($data[$reqField])){

                $missingFields[] = $reqField;

            }

        }

        if(count($missingFields) > 0){

            return $missingFields;

        }else{

            return false;

        }

    }

}
