<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Departament extends Model
{
	use Notifiable;

	public $timestamps = false;
	public $incrementing = false;

	protected $casts = [
		'belongs' => 'int'
	];

	protected $fillable = [
        'name', 'rfc_chief', 'belongs'
    ];

    public function careers()
	{
		return $this->hasMany(\App\Models\Career::class);
	}

	public function employees()
	{
		return $this->hasMany(\App\Models\Employee::class);
	}

}
