<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers; /* 依頼者：requester　登録  */
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
            'company_name' => ['required'],
            'url_company' => ['required'],
            'name' => ['required'],
            'tell' => ['required'],
            'address_mail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'url_pr' => ['required'],
            'body' => ['required'],
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
        return User::create([
            'id' =>  Hash::make($data['id']),
            'password' => Hash::make($data['password']),
            'company_name' => $data['company_name'],
            'url_company' => $data['url_company'],
            'name' => $data['name'],
            'tell' => $data['tell'],
            'address_mail' => $data['address_mail'],
            'url_pr' => $data['url_pr'],
            'body' => $data['body'],
        ]);
    }
}
