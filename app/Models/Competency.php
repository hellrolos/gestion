<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Competency extends Model
{
	use Notifiable;

	protected $casts = [
    	'active' => 'bool'
	];

    protected $fillable = [
		'subject_id', 'description', 'type'
	];

    public function subject(){
    	return $this->belongsTo(\App\Models\Subject::class);
    }

    public function activities()
	{
		return $this->hasMany(\App\Models\Activity::class);
	}

	public function criteria()
	{
		return $this->hasMany(\App\Models\Criterion::class);
	}

	public function evidences()
	{
		return $this->hasMany(\App\Models\Evidence::class);
	}

	public function topiccompetencies()
	{
		return $this->hasMany(\App\Models\TopicCompetency::class);
	}
}
