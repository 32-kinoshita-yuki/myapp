<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requester extends Model
{
    protected $guarded = array('id');
   // バリテーション
    public static $rules = array(
       
            'company_name' => 'required',
            'url_company'=> 'required',
            'name' => 'required',
            'tell' => 'required',
            'address_mail' => 'required',
            'url_pr' => 'required',
            'body' => 'required',
        
        
        
    );
}
