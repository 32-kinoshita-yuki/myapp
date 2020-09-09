<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable; //

class Influencer extends Authenticatable//認証機能として使う
{
public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'address_mail' => 'required',
        'tel_num' => 'required',
        'address' => 'required',
        'age' => 'required',
        'sns_kind' => 'required',
        'sns_url' => 'required',
        'sns_genre' => 'required',
      
    
    );
}
