<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Activity extends Model
{

	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'campetency_id' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
        'competency_id', 'group_id', 'type', 'description'
    ];

    public function competency(){
    	return $this->belongsTo(\App\Models\Competency::class);
    }

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }
}
