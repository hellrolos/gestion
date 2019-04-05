<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Career extends Model
{
	use Notifiable;

    public $incrementing = false;

    protected $casts = [
    	'active' => 'bool',
		'departament_id' => 'int'
	];

    protected $fillable = [
        'departament_id', 'name', 'level', 'acronym'
    ];

	public function departament(){
    	return $this->belongsTo(\App\Models\Departament::class);
    }

	public function reticles()
	{
		return $this->hasMany(\App\Models\Reticle::class);
	}
}
