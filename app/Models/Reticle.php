<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reticle extends Model
{

	use Notifiable;

	protected $casts = [
		'career_id' => 'int',
		'reticle' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
        'career_id', 'reticle', 'oficial_key', 'start_date', 'final_date'
    ];

    public function career(){
    	return $this->belongsTo(\App\Models\Career::class);
    }

    public function plans()
	{
		return $this->hasMany(\App\Models\Plan::class);
	}

	public function students()
	{
		return $this->hasMany(\App\Models\Student::class);
	}
}
