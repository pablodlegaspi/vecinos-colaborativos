<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{

  public function profile()
	{
		$posts = Post::all();
		return view('profile', compact('posts'));
	}

  public function create()
	{
		return view('create-post');
	}

  public function store(Request $request)
	{

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
    if ($request["image"]) {

      $imagen = $request["image"];

  		$imagenFinal = uniqid(Auth::user()->email . ".") . "." . $imagen->extension();

  		$imagen->storePubliclyAs("public/post-files", $imagenFinal);

  		$newPost->image = $imagenFinal;
  		$newPost->save();

    }

    return redirect('/timeline');

	}

  public function show($id) {
    $post = Post::find($id);
    return view('post', compact('post'));
  }

  public function edit($id)
  {
    $post = Post::find($id);
    return view('edit-post', compact('post'));
  }

  public function update ($id, Request $request)
	{
    $postToUpdate = Post::find($id);
		$postToUpdate->title = $request['title'];
		$postToUpdate->description = $request['description'];
		$postToUpdate->image = $request['image'];
		$postToUpdate->video = $request['video'];

    if ($request["image"]) {

      $imagen = $request["image"];

      $imagenFinal = uniqid(Auth::user()->email . ".") . "." . $imagen->extension();

      $imagen->storePubliclyAs("public/post-files", $imagenFinal);

      $postToUpdate->image = $imagenFinal;

    }

		$postToUpdate->save();

		return redirect('/profile');
	}

  public function delete($id)	{

		$postToDelete = Post::find($id);
		$postToDelete->delete();

		return redirect('/profile');
	}


}
