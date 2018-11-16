<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Edit;
use App\User;

class Edit extends Model
{
	protected $table = 'edits';
	
	protected $primaryKey = 'id';

	public $timestamps = false;

	public function getCategory() {
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}

	public function isUpvoted($user_id, $edit_id) {
		$user = User::find($user_id);
		$posts_upvoted = explode(';', $user->posts_upvoted);
		if(in_array($edit_id, $posts_upvoted)) {
			return true;
		} else {
			return false;
		}
	}

}
