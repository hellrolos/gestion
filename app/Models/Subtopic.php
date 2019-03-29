<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subtopic extends Model
{

	use Notifiable;

    protected $casts = [
		'topic_id' => 'int',
        'active' => 'bool'
	];

	protected $fillable = [
        'topic_id', 'index', 'name'
    ];

    public function topic(){
    	return $this->belongsTo(\App\Models\Topic::class);
    }
}
