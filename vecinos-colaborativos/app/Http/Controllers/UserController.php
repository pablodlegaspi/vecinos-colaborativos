<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller
{
  // public function settings($id) {
  //   $user = User::find($id);
  //   return view('settings', compact('user'));
  // }

  public function update(Request $request) {

    $userToUpdate = User::find(Auth::user()->id);

    $request->validate([
      'first_name' => ['nullable', 'string', 'max:255'],
      'last_name' => ['nullable', 'string', 'max:255'],
      'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['nullable', 'string', 'min:5', 'confirmed', 'regex:/DH/'],
      'country' => ['nullable', 'string', 'max:20'],
      'avatar' => ['nullable', 'image']
		], [
      'email' => 'Ingresa un formato de email',
      'string' => 'Completá con el formato apropiado',
      'max' => 'Excediste el máximo de caracteres posibles',
      'image' => 'El formato debe ser apropiado para una imagen',
      'confirmed' => 'Las contraseñas no coinciden',
      'min' => 'La contraseña debe tener mínimo 5 caracteres',
      'email.unique' => 'Ya existe un usuario con ese email',
      'password.regex' => 'La contraseña no puede tener espacios y debe incluir las letras "DH"',
		]);

    if ($request['first_name']) {
      $userToUpdate->first_name = $request['first_name'];
    }
    if ($request['last_name']) {
      $userToUpdate->last_name = $request['last_name'];
    }
    if ($request['email']) {
      $userToUpdate->email = $request['email'];
    }
    if ($request['password']) {
      $userToUpdate->password = Hash::make($request['password']);
    }
    if ($request['country']) {
      $userToUpdate->country = $request['country'];
    }

    $userToUpdate->save();

    if ($request['avatar']) {

      $avatar = $request["avatar"];

      if ($request['email']) {
        $avatarRef = uniqid( $request['email'] . "-" ) . "." . $avatar->extension();
      } else {
        $avatarRef = uniqid( Auth::user()->email . "-" ) . "." . $avatar->extension();
      }

      $avatar->storePubliclyAs("public/avatars", $avatarRef);

      $userToUpdate->avatar = $avatarRef;
      $userToUpdate->save();

    }

    return redirect('profile');

  }
}
