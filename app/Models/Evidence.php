<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Evidence extends Model
{

	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'competency_id' => 'int',
		'group_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
        'competency_id', 'group_id', 'route', 'filename', 'date'
    ];

    public function competency(){
    	return $this->belongsTo(\App\Models\Competency::class);
    }

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }
}
