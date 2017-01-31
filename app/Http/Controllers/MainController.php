<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(Request $request)
    {
    // $name = $request->name;
    // $jsonArray = [
    //     'name' => $name
    // ];
    // $json = json_encode($jsonArray);
    // File::append('/store.json', $json);
    	return 'ok';  
    }
}
