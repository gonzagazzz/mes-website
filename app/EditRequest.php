<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditRequest extends Model
{
	
	protected $table = 'requests';

	protected $primaryKey = 'id';

	public $timestamps = false;

	public function getUser() {
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

	public function isUpvoted($user_id, $request_id) {
		$user = User::find($user_id);
		$requests_upvoted = explode(';', $user->requests_upvoted);
		if(in_array($request_id, $requests_upvoted)) {
			return true;
		} else {
			return false;
		}
	}

}
