<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
	
	protected $table = 'clubs';

	protected $primaryKey = 'id';

	public $timestamps = false;

}
