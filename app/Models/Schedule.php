<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'group_id' => 'int',
		'runaway' => 'bool'
	];

	protected $fillable = [
        'student_id', 'group_id', 'runaway'
    ];

    public function student(){
    	return $this->belongsTo(\App\Models\Student::class);
    }

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }

    public function partials()
	{
		return $this->hasMany(\App\Models\Partial::class);
	}
}
