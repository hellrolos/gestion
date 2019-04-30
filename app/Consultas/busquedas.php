<?php
namespace gestion\Consultas;

use gestion\Models\{Period, Departament, Career, Employee, Subject, Reticle, Plan, Student};

class busquedas {

	public function getReticula($carrera, $reticula){
		$Car = Career::where("acronym", "=", $carrera)->first();
		$Ret = Reticle::where([
			["career_id", "=", $Car->id],
			["reticle", "=", $reticula]
		])->first();
		return $Ret;
	}

}
?>