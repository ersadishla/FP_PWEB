<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smp extends Model
{
	protected $table = 'smps';

	public $primaryKey = 'id';

	protected $fillable = [
        'nama',
  	];
    //
}
