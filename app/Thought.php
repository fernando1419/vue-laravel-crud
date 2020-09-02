<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
	protected $fillable = ['description', 'user_id'];

	protected $rules = [
						'description'  => 'required',
						'user_id'      => 'required'
   ];
}
