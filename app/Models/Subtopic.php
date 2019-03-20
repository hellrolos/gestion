<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subtopic extends Model
{

	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'topic_id' => 'int'
	];

	protected $fillable = [
        'topic_id', 'index', 'name'
    ];

    public function topic(){
    	return $this->belongsTo(\App\Models\Topic::class);
    }
}
