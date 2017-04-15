<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

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
        $xml = File::get($filePath);

        $xmlContent = new \SimpleXMLElement($xml);
        dd($xmlContent->creatures);

        if(count($xmlContent->creatures) > 0){



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
