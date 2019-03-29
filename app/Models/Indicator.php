<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Indicator extends Model
{
	use Notifiable;

	protected $casts = [
    	'active' => 'bool'
	];

	protected $fillable = [
        'name'
    ];

    public function criteria(){
    	return $this->hasMany(\App\Models\Criterion::class);
    }
}
