<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
	use Notifiable;

    public $incrementing = false;

    protected $casts = [
		'career_id' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
        'id', 'career_id', 'lastname', 'mother_lastname', 'names', 'status','sex', 'birthdate'
    ];

    public function reticle(){
    	return $this->belongsTo(\App\Models\Reticle::class);
    }

    public function schedules()
	{
		return $this->hasMany(\App\Models\Schedule::class);
	}
}
