<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SearchController extends Controller
{
  public function search() {

    $users = User::where('first_name' , 'LIKE', '%' . $_GET['searched'] . '%')
    ->orWhere('last_name', 'LIKE', '%' . $_GET['searched'] . '%')
    ->orderBy('first_name');

    return view('search', compact('users'));
  }
}
