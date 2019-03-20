<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reticle extends Model
{

	use Notifiable;

    public $timestamps = false;

    protected $dates = [
		'start_date', 'final_date'
	];

	protected $casts = [
		'career_id' => 'int', 'reticle' => 'int'
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
}
