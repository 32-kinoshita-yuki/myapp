<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Influencer\RegistersUsers;/* インフルエンサー：influencer　登録  */

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name' => ['required'],
            'address_mail' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel_num' => ['required'],
            'address' => ['required'],
            'sns_kind' => ['required'],
            'sns_url' => ['required'],
            'sns_genre' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Influencer::create([
            'id' =>  Hash::make($data['id']),
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'address_mail' => $data['address_mail'],
            'tel_num' => $data['tel_num'],
            'address' => $data['address'],
            'sns_kind' => $data['sns_kind'],
            'sns_url' => $data['sns_url'],
            'sns_genre' => $data['sns_genre'],
      
        ]);
    }
}
