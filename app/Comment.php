<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	
	protected $primaryKey = 'id';

	protected $table = 'comments';

	public $timestamps = false;

	public function getUser()
	{
	    return $this->belongsTo('App\User', 'user_id', 'id');
	}

	public function getEdit()
	{
		return $this->belongsTo('App\Edit', 'edit_id', 'id');
	}

}
