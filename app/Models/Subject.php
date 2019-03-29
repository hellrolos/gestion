<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subject extends Model
{
	use Notifiable;

	protected $casts = [
		'active' => 'bool'
	];

	protected $fillable = [
        'id', 'name', 'level'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function competencies()
	{
		return $this->hasMany(\App\Models\Competency::class);
	}

	public function sources()
	{
		return $this->hasMany(\App\Models\Source::class);
	}

	public function plans()
	{
		return $this->hasMany(\App\Models\Plan::class);
	}

	public function topics()
	{
		return $this->hasMany(\App\Models\Topic::class);
	}
}
