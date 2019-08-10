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

    /*use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    /* protected $redirectTo = '/timeline';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /* protected function validator(array $data)
    {
        // $request = request(); esto es para poder validar un file
        return Validator::make($data, [
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'country' => ['required', 'string', 'max:20'],
          'avatar' => ['required', 'string', 'max:400']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /* protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['name'],
            'last_name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'avatar' => $data['avatar']
        ]);
    }
    */
    // A partir de acá van las funciones que no vienen con Laravel automáticamente:

    public function register(Request $request) {
      $request-validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'country' => ['required', 'string', 'max:20'],
        'avatar' => ['required', 'image']
      ], [
        'required' => 'El campo es obligatorio',
        'string' => 'Completá con el formato apropiado',
        'max' => 'Excediste el máximo de caracteres posibles',
        'image' => 'El formato debe ser apropiado para una imagen'
      ]);

      User::create([
        'first_name' => $request['name'],
        'last_name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'country' => $request['country'],
        'avatar' => $request['avatar']
      ]);

  		$avatar = $request["avatar"];

  		$avatarRef = uniqid($request['email'] ) . "." . $avatar->extension();

  		$imagen->storePubliclyAs("public/avatars", $avatarRef);

  		// Le asigno la imagen a la película que guardamos
  		$newUser->avatar = $avatarRef;
  		$newUser->save();

  		// Redireccionamos
  		return redirect('/timeline');
    }

    public function form() {
      $countries = [
        'ar' => 'Argentina',
    		'br' => 'Brasil',
    		'bo' => 'Bolivia',
    		'co' => 'Colombia',
    		'ch' => 'Chile',
    		'ec' => 'Ecuador',
    		'pe' => 'Perú',
        'pa' => 'Paraguay',
    		've' => 'Venezuela'
      ];

      return view('/register', compact('countries'));
    }



}
