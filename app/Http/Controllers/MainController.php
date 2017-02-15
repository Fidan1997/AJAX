<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File; 

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

    // public function getNameMeaning($name){
    //     return
    // }

    public function store(Request $request){
    $name = $request->name;
    $password = $request->password;
    $user = $request->user;
    $jsonArray = [
        'name' => $name,
        'password' => $password,
        'user' => $user
    ];
    $json = json_encode($jsonArray);

    File::append('store.json', $json);

}
}
