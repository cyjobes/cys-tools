<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class PostcardController extends Controller
{
    public function prepare_to_decrypt()
    {
        $data['postcard'] = Postcard::all();

        return view('postcard.prep', ["data" => $data]);
    }


    public function decrypt()
    {
        try {
            $postcards = Postcard::all();

            foreach ($postcards as &$data) {
                if ($data->hashed_email !== "") {
                    $data->email = base64_decode($data->hashed_email);
                    $data->save();
                }
            }

        } catch(Exception $e) {
             return view('postcard.complete', ["data" => $e]);
        }
         return view('postcard.complete', ["data" => 1]);
    }
}
