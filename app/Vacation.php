<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
   	protected $table = 'vacations'; 
	public $timestamps = false;

	public function locations()
	{
		return $this->hasOne('App\Location', 'idLokacije', 'lokacijaId');
	}
}
