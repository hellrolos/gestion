<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Indicator extends Model
{
	use Notifiable;

	public $timestamps = false;

	protected $fillable = [
        'name'
    ];

    public function criteria(){
    	return $this->hasMany(\App\Models\Criterion::class);
    }
}
