<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
	use Notifiable;

    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
		'career_id' => 'int'
	];

	protected $dates = [
		'birthdate'
	];

	protected $fillable = [
        'id', 'career_id', 'lastname', 'mother_lastname', 'names', 'status','sex', 'birthdate'
    ];

    public function career(){
    	return $this->belongsTo(\App\Models\Career::class);
    }

    public function schedules()
	{
		return $this->hasMany(\App\Models\Schedule::class);
	}
}
