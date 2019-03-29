<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{

	use Notifiable;

    protected $casts = [
		'period_id' => 'int',
		'plan_id' => 'int',
		'approved' => 'bool',
		'capacity' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
        'period_id', 'employee_id', 'plan_id', 'group', 'approved','capacity'
    ];

    public function employee(){
    	return $this->belongsTo(\App\Models\Employee::class);
    }

    public function plan(){
    	return $this->belongsTo(\App\Models\Plan::class);
    }

    public function period()
	{
		return $this->belongsTo(\App\Models\Period::class);
	}

	public function activities()
	{
		return $this->hasMany(\App\Models\Activity::class);
	}

	public function supports()
	{
		return $this->hasMany(\App\Models\Support::class);
	}

	public function schedules()
	{
		return $this->hasMany(\App\Models\Schedule::class);
	}

	public function criteria()
	{
		return $this->hasMany(\App\Models\Criterion::class);
	}

	public function evidences()
	{
		return $this->hasMany(\App\Models\Evidence::class);
	}

	public function sources()
	{
		return $this->hasMany(\App\Models\Source::class);
	}
}
