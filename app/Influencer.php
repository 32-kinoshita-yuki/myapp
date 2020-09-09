<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $guarded = array('id');

    // バリテーション
    public static $rules = array(
        'name' => 'required',
        'address_mail' => 'required',
        'tel_num' => 'required',
        'address' => 'required',
        'sns_kind' => 'required',
        'sns_url' => 'required',
        'sns_genre' => 'required',
    );
}