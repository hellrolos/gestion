<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
	use Notifiable;

	public $timestamps = false;

	protected $casts = [
		'type_id' => 'int', 'belongs' => 'int'
	];

	protected $fillable = [
        'transmitter', 'receiver', 'type', 'type_id', 'status', 'message', 'belongs'
    ];
}
