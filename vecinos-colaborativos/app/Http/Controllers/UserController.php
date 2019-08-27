<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
  public function settings($id) {
    $user = User::find($id);
    return view('settings', compact('user'));
  }
}
