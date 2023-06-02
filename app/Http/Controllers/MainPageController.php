<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Email;
use App\Models\Phone;
use App\Models\social_media;
use App\Models\User;

class MainPageController extends Controller
{
    public function index()
    {
        //$avatar = Avatar::find(88);dd($avatar->users);
        $user = User::find(1);dd($user->avatars);
        //$email = Email::find(59);dd($email->users);
        /*
        $avatar = Avatar::all();
        $email = Email::all();
        $phone = Phone::all();
        $socialMedia = social_media::all();
        $user = User::all();

         $all[] = $avatar->toArray();
        $all[] = $email->toArray();
        $all[] = $phone->toArray();
        $all[] = $socialMedia->toArray();
        $all[] = $user->toArray();
        
        $all[] = $avatar->toJson();
        $all[] = $email->toJson();
        $all[] = $phone->toJson();
        $all[] = $socialMedia->toJson();
        $all[] = $user->toJson();
        
        //dd($all[1]);
       
        foreach($all as $value){
dd($value);
        }
        return view('all', ['all' => $finaledJson]);*/
    }
}
