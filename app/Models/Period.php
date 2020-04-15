<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Period extends Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
        'id', 'name', 'short_name', 'start_date', 'final_date'
    ];

    public function groups()
	{
		return $this->hasMany(\App\Models\Group::class);
	}

}
