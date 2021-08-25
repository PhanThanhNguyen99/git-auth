<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Menber extends Controller
{
    

    function getData(){
        $data= [
            'name' => 'nguyen2',
            'password' =>bcrypt('1'),
            'token' => '1'
        ];
        DB::table('users') -> insert($data);
    }
}
