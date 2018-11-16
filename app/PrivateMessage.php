<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model
{
	
	protected $table = 'messages';

	protected $primaryKey = 'id';

	public $timestamps = false;

	public function getUser() {
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

}
