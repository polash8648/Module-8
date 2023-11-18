<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $response = new Response($data, 200);
        $response->cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        return $response;
    }
}
