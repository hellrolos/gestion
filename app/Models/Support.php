<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Support extends Model
{
	use Notifiable;

    protected $casts = [
		'group_id' => 'int',
        'active' => 'bool'
	];

	protected $fillable = [
        'group_id', 'name'
    ];

    public function group(){
    	return $this->belongsTo(\App\Models\Group::class);
    }
}
