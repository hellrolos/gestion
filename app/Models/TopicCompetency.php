<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;

class TopicCompetency extends Model
{
    public function competency(){
    	return $this->belongsTo(\App\Models\Competency::class);
    }

    public function topic(){
    	return $this->belongsTo(\App\Models\Topic::class);
    }
}
