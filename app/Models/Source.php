<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Source extends Model
{
	use Notifiable;

    protected $casts = [
		'group_id' => 'int',
		'date' => 'int',
        'active' => 'bool'
	];

	protected $fillable = [
        'group_id', 'subject_id', 'name', 'date', 'edition','editorial', 'author'
    ];

    public function subject(){
    	return $this->belongsTo(\App\Models\Subject::class);
    }

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }
}
