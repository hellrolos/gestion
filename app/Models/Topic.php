<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Topic extends Model
{
	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'number' => 'int'
	];

	protected $fillable = [
        'subject_id', 'number', 'name'
    ];

    public function subject(){
    	return $this->belongsTo(\App\Models\Subject::class);
    }

    public function subtopics()
	{
		return $this->hasMany(\App\Models\Subtopic::class);
	}

	public function topiccompetencies()
	{
		return $this->hasMany(\App\Models\TopicCompetency::class);
	}
}
