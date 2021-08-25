<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Session;

class Auth1 extends Controller
{
    public function auth(Request $req)
    {   $req -> validate([
        'username' => 'required',
        'password' => 'required'
    ]);
        //  $data= $req->input();
        // $req->session()->put('user',$data['username']);
        // return redirect()->route('profile');
        $arr =[
            'name' => $req -> username ,
            'password' =>  $req -> password
        ];
        if(Auth::attempt($arr)){
            return redirect()->route('profile');
        }else{
            return redirect('login')->withErrors([
                'used' => "Invalid account or password please try again"
            ]);
        }
    }

    public function register(Request $req)
    {   $req -> validate([
        'username' => 'required|alpha_num',
        'password' => 'required|alpha_num',
        'password_confirmation' => 'required|alpha_num|same:password'
    ]);
        $arr =[
            'name' => $req -> username,
            'password' => $req -> password, 
        ];
        $users = DB::table('users')->where('name',$req -> username)->count();
        if($users >= 1){
        
          return redirect('register')->withErrors([
              'used' => "Account already exists"
          ]);
        }else{
            $data= [
                'name' => $req -> username,
                'password' =>bcrypt($req -> password),
                'token' => '1'
            ];
           
              DB::table('users')->insert($data);
              return redirect('login');
        }
    }
    
    public function changeLanguage(Request $req){
        $lang =  $req->language;
        $language = config('app.locale');
        if($lang == 'en'){
            $language ='en';
        }
        if($lang =='vi'){
            $language ='vi';
        }
        $req->session()->put('language', $language);
      
            return redirect()->back();
    
    }
    

}
