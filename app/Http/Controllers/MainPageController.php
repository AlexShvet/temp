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
        
        $finaledJson = '[';
        for ($i = 0; $i < 10; $i++) {
            $finaledJson .= '{';
            foreach ($user['data'][$i] as $key => $value) {
                if ($key != 'created_at' and $key != 'updated_at') {
                    $finaledJson .= '"' . $key . '":"' . $value . '",';
                }
            }
            foreach ($social_media['data'][$i] as $key => $value) {
                if ($key != 'created_at' and $key != 'updated_at' AND $key != 'id' AND $key != 'users_id') {
                    $finaledJson .= '"' . $key . '":"' . $value . '",';
                }
            }
           
            foreach ($phone['data'][$i] as $key => $value) {
                if ($key != 'created_at' and $key != 'updated_at' AND $key != 'id' AND $key != 'users_id') {
                    $finaledJson .= '"' . $key . '":"' . $value . '",';
                }
            }
            foreach ($email['data'][$i] as $key => $value) {
                if ($key != 'created_at' and $key != 'updated_at' AND $key != 'id' AND $key != 'users_id') {
                    $finaledJson .= '"' . $key . '":"' . $value . '",';
                }
            }
            foreach ($avatar['data'][$i] as $key => $value) {
                if ($key != 'created_at' and $key != 'updated_at' AND $key != 'id' AND $key != 'users_id') {
                    $finaledJson .= '"' . $key . '":"' . $value . '",';
                }
            }
            $finaledJson = mb_substr($finaledJson, 0, -1);
            $finaledJson .= '},';
        }
        $finaledJson = mb_substr($finaledJson, 0, -1);
        $finaledJson .= ']';
        
        //$finaledJson = str_replace(',', ',<br>', $finaledJson); // для себя, что б удобнее проверять
       
        return view('all', ['all' => $finaledJson]);
    }
}
