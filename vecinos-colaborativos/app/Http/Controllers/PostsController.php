<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

  public function index()
	{
		return view('create-post');
	}


  public function store(Request $request)
	{
		// Validamos
		$request->validate([
			'title' => 'required',
			'description' => 'required | string | max:1000',
      'image' => 'image',
      'video' => 'file',
			'user_id' => 'required',
		], [
			'title.required' => 'El título es obligatorio',
      'string' => 'La descripción debe tener un formato adecuado',
      'image' => 'La imagen debe tener un formato adecuado',
		]);


		$newPost = Post::create($request->all());

    if ($request["imagen"]) {

      $imagen = $request["imagen"];

  		$imagenFinal = uniqid("user_id-" . $request['user_id']) . "." . $imagen->extension();

  		$imagen->storePubliclyAs("public/post-files", $imagenFinal);

  		$newPost->image = $imagenFinal;
  		$newPost->save();

  		return redirect('/timeline');
    }

    return redirect('/timeline');


	}
}

// El timeline va a tener un formulario que por post trae la información para la función create
