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
        
        $user = User::paginate(10)->toArray();
        $social_media = social_media::paginate(10)->toArray();
        $phone = Phone::paginate(10)->toArray();
        $email = Email::paginate(10)->toArray();
        $avatar = Avatar::paginate(10)->toArray();
        
        for ($i=0; $i < 10; $i++) { 
            $all[] = $user['data'][$i];
            $all[] = $social_media['data'][$i];
            $all[] = $phone['data'][$i];
            $all[] = $email['data'][$i];
            $all[] = $avatar['data'][$i];
        }
        $finaledJson = json_encode($all);
        //$finaledJson = str_replace(',', ',<br>', $finaledJson);// для себя, что б удобнее проверять
      
        return view('all', ['all' => $finaledJson]);
    }
}
