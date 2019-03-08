<?php

namespace gestion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organization extends Model
{
	use Notifiable;

	protected $fillable = [
        'id', 'departament', 'role_type'
    ];
}
