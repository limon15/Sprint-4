<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'user' => 'required|string|max:20|unique:users',
            'pass' => 'required|string|min:6|confirmed',
            'pass_confirmation' => 'required|string|min:6',
            'phone' => 'required|string|min:8|numeric',
            'avatar' => 'required|mimes:jpeg,jpg,png'
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
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'user' => $data['user'],
            'pass' => Hash::make($data['pass']),
            'phone' => $data['phone'],
            'avatar' => $data['avatar']
        ]);
    }
    public function store(Request $request) {
      $user= $request->user();
      $file = $request->file("avatar");
      $avatar = $user->email.".".$file->extension();
      $folder = "avatar";
      $path = $file->storePubliclyAs($folder, $avatar);
    }
  }
