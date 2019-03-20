<?php

namespace gestion\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
	use Notifiable;

	protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $casts = [
		'departament_id' => 'int'
	];

	protected $fillable = [
        'departament_id', 'names', 'lastnames', 'comission', 'sex','mail'
    ];

    public function departament(){
    	return $this->belongsTo(\App\Models\Departament::class);
    }

    public function groups()
	{
		return $this->hasMany(\App\Models\Group::class);
	}
}
