<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Plan extends Model
{
	use Notifiable;

    protected $casts = [
		'reticle_id' => 'int',
		'credits' => 'int',
		'practical_hours' => 'int',
		'theoretical_hours' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
        'subject_id', 'reticle_id', 'credits', 'practical_hours', 'theoretical_hours'
    ];

    public function subject(){
    	return $this->belongsTo(\App\Models\Subject::class);
    }

    public function reticle()
	{
		return $this->belongsTo(\App\Models\Reticle::class);
	}

	public function groups()
	{
		return $this->hasMany(\App\Models\Group::class);
	}
}
