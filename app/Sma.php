<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sma extends Model
{
	protected $table = 'smas';

	public $primaryKey = 'id';

	protected $fillable = [
        'nama',
  	];
    //
}
