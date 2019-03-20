<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Support extends Model
{
	use Notifiable;

    public $timestamps = false;

    protected $casts = [
		'group_id' => 'int'
	];

	protected $fillable = [
        'group_id', 'name'
    ];

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }
}
