<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ["title", "description", "image", "video", "user_id"];
  protected $guarded = ["id"];

  public function user()
	{
		return $this->belongsTo(User::class);
	}

}
