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
    protected $redirectTo = '/timeline';

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
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:5', 'confirmed'],
          'country' => ['required', 'string', 'max:20'],
          'avatar' => ['image']
        ],[
          'required' => 'El campo es obligatorio',
          'email' => 'Ingresa un formato de email',
          'string' => 'Completá con el formato apropiado',
          'max' => 'Excediste el máximo de caracteres posibles',
          'image' => 'El formato debe ser apropiado para una imagen',
          'confirmed' => 'Las contraseñas no coinciden',
          'email.unique:users' => 'Ya existe un usuario con ese email' //no funciona esto
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

      $request = request();

      $avatar = $request["avatar"];

      $avatarRef = uniqid( $request['email'] . "-" ) . "." . $avatar->extension();

      $avatar->storePubliclyAs("public/avatars", $avatarRef);


        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'avatar' => $avatarRef,
        ]);

    }
}
