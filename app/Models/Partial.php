<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Partial extends Model
{
	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'schedule_id' => 'int',
		'criterion_id' => 'int',
		'score' => 'int',
		'oportunity' => 'int'
	];

	protected $fillable = [
        'schedule_id', 'criterion_id', 'score', 'oportunity'
    ];

    public function criterion(){
    	return $this->belongsTo(\App\Models\Criterion::class);
    }

    public function schedule(){
    	return $this->belongsTo(\App\Models\Schedule::class);
    }
}
