<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Period extends Model
{
	use Notifiable;

	public $incrementing = false;
    public $timestamps = false;

    protected $dates = [
		'start_date', 'final_date'
	];

	protected $fillable = [
        'id', 'name', 'short_name', 'start_date', 'final_date'
    ];

    public function groups()
	{
		return $this->hasMany(\App\Models\Group::class);
	}

}
