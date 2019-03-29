<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Criterion extends Model
{
	use Notifiable;

    protected $casts = [
		'indicator_id' => 'int',
		'competency_id' => 'int',
		'group_id' => 'int',
		'percent' => 'int',
        'active' => 'bool'
	];

	protected $fillable = [
        'indicator_id', 'competency_id', 'group_id', 'factor', 'evidence', 'percent', 'type'
    ];

    public function indicator(){
    	return $this->belongsTo(\App\Models\Indicator::class);
    }

    public function competency(){
    	return $this->belongsTo(\App\Models\Competency::class);
    }

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }

    public function partials()
	{
		return $this->hasMany(\App\Models\Partial::class);
	}
}
