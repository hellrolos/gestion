<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TopicCompetency extends Model
{
	use Notifiable;


    public function competency(){
    	return $this->belongsTo(\App\Models\Competency::class);
    }

    public function topic(){
    	return $this->belongsTo(\App\Models\Topic::class);
    }
}
