<?php

namespace gestion\Consultas;

use gestion\WS\SII;
use gestion\Models\{Period, Departament, Career, Employee, Subject, Reticle, Plan, Student};
use gestion\Consultas\busquedas;

class migracion {
	protected $SIIws;
	protected $Consul;

	public function __construct(SII $SII, busquedas $Busq) {
		$this->SIIws = $SII;
		$this->Consul = $Busq;
    }

    public function MisPeriodos(){
    	$Periodos = $this->SIIws->Periodos();
		if($Periodos != null) {
			$Totales = json_decode($Periodos->getBody()->getContents(), true);
			foreach($Totales as $periodo){
				$BP = Period::where("id", "=", $periodo['id'])->first();
				if($BP == null){
					$newPeriodo = new Period();
					$newPeriodo->id= $periodo['id'];
					$newPeriodo->name= $periodo['nombre'];
					$newPeriodo->short_name= $periodo['nombre_corto'];
					$newPeriodo->start_date= $periodo['fecha_inicio'];
					$newPeriodo->final_date= $periodo['fecha_termino'];
					$newPeriodo->save();
				}
				else {
					$BP->start_date = $periodo['fecha_inicio'];
					$BP->start_date = $periodo['fecha_termino'];
					$BP->save();
				}
			}
		}
    }

    public function MisDepartamentos(){
    	$Deptos = $this->SIIws->Departamentos();
		if($Deptos != null){
			$Totales = json_decode($Deptos->getBody()->getContents(), true);
			foreach($Totales as $depto){
				$BDepto = Departament::where("id", "=", $depto['clave_area'])->first();
				if($BDepto == null){
					$newDepto = new Departament();
					$newDepto->id = $depto['clave_area'];
					$newDepto->name = $depto['descripcion_area'];
					$newDepto->rfc_chief = $depto['rfc'];
					$newDepto->belongs = $depto['area_depende'];
					$newDepto->save();
				}
				else {
					$BDepto->rfc_chief = $depto['rfc'];
					$BDepto->save();
				}
			}
		}
    }

    public function MisCarreras(){
    	$Carreras = $this->SIIws->Carreras();
		if($Carreras != null) {
			$Todas = json_decode($Carreras->getBody()->getContents(), true);
			foreach($Todas as $carrera) {
				$BDCarrera = Career::where("acronym", "=", $carrera['carrera'])->first();
				if($BDCarrera == null){
					$newCareer = new Career();
					if($carrera['clave'] == '999999') {
						$newCareer->departament_id = null;
					}
					else {
						$newCareer->departament_id = $carrera['clave'];
					}
					$newCareer->name = $carrera['nombre'];
					$newCareer->level = $carrera['nivel'];
					$newCareer->acronym = $carrera['carrera'];
					$newCareer->save();
				}
			}
		}
    }

    public function MisEmpleados(){
    	$Personal = $this->SIIws->Personal();
		if($Personal != null) {
			$Todos = json_decode($Personal->getBody()->getContents(), true);
			foreach($Todos as $empleado) {
				$BDEmpleado = Employee::where("id", "=", $empleado['rfc'])->first();
				if($BDEmpleado == null){
					$newEmployee = new Employee();
					$newEmployee->id = $empleado['rfc'];
					$newEmployee->departament_id = $empleado['clave'];
					$newEmployee->names = $empleado['nombres'];
					$newEmployee->lastnames = $empleado['apellidos'];
					$newEmployee->comission = $empleado['nombramiento'];
					$newEmployee->sex = $empleado['sexo'];
					$newEmployee->mail = $empleado['correo'];
					$newEmployee->save();
				}
				else {
					$BDEmpleado->comission = $empleado['nombramiento'];
					$BDEmpleado->mail = $empleado['correo'];
					$BDEmpleado->departament_id = $empleado['clave'];
					$BDEmpleado->save();
				}
			}
		}
    }

    public function MisAsignaturas(){
    	$Materias = $this->SIIws->Materias();
		if($Materias != null){
			$Todas = json_decode($Materias->getBody()->getContents(), true);
			foreach($Todas as $materia) {
				$BDMateria = Subject::where("id", "=", $materia['materia'])->first();
				if($BDMateria == null){
					$newSubject = new Subject();
					$newSubject->id = $materia['materia'];
					$newSubject->level = $materia['nivel'];
					$newSubject->name = $materia['nombre'];
					$newSubject->save();
				}
				else {
					$BDMateria->name = $materia['nombre'];
					$BDMateria->save();
				}
			}
		}
    }

    public function MisReticulas(){
    	$Reticulas = $this->SIIws->Reticulas();
		if($Reticulas != null){
			$Todas = json_decode($Reticulas->getBody()->getContents(), true);
			foreach($Todas as $reticula){
				$Mat = Career::where("acronym", "=", $reticula['carrera'])->first();
				if($Mat != null){
					$Ret = Reticle::where([
						["career_id", "=", $Mat->id],
						["reticle", "=", $reticula['reticula']],
					])->first();
					if($Ret == null) {
						$newReticle = new Reticle();
						$newReticle->career_id = $Mat->id;
						$newReticle->reticle = $reticula['reticula'];
						$newReticle->oficial_key = $reticula['oficial'];
						$newReticle->start_date = $reticula['fec_inicio'];
						$newReticle->final_date = $reticula['fec_termino'];
						$newReticle->save();
					}
					 else {
					 	$Ret->oficial_key = $reticula['oficial'];
						$Ret->start_date = $reticula['fec_inicio'];
						$Ret->final_date = $reticula['fec_termino'];
						$Ret->save();
					}
				}
			}
		}
    }

    public function MisPlanes(){
    	$Planes = $this->SIIws->Planes();
		if($Planes != null){
			$Todos = json_decode($Planes->getBody()->getContents(), true);
			foreach($Todos as $plan){
				$Reticula = $this->Consul->getReticula($plan['carrera'], $plan['reticula']);
				if($Reticula != null){
					$ExisPlan = Plan::where([
						["subject_id", "=", $plan['materia']],
						["reticle_id", "=", $Reticula->id]
					])->first();
					if($ExisPlan == null){
						$newPlan = new Plan();
						$newPlan->reticle_id = $Reticula->id;
						$newPlan->subject_id = $plan['materia'];
						$newPlan->credits = $plan['creditos'];
						$newPlan->theoretical_hours = $plan['teoricas'];
						$newPlan->practical_hours = $plan['practicas'];
						$newPlan->save();
					}
					else {
						$ExisPlan->credits = $plan['creditos'];
						$ExisPlan->theoretical_hours = $plan['teoricas'];
						$ExisPlan->practical_hours = $plan['practicas'];
						$ExisPlan->save();
					}
				}
			}
		}
    }

    public function MisAlumnos(){
    	$Alumnos = $this->SIIws->Alumnos();
    	if($Alumnos != null){
    		$Todos = json_decode($Alumnos->getBody()->getContents(), true);
    		foreach($Todos as $alumno){
    			$DBAlu = Student::where("id", "=", $alumno['control'])->first();
    			if($DBAlu == null){
    				$Ret = $this->Consul->getReticula($alumno['carrera'], $alumno['reticula']);
    				$newAlu = new Student();
    				$newAlu->id = $alumno['control'];
    				$newAlu->reticle_id = $Ret->id;
    				$newAlu->lastname = $alumno['ap'];
    				$newAlu->mother_lastname = $alumno['am'];
    				$newAlu->names = $alumno['nombres'];
    				$newAlu->status = $alumno['estatus'];
    				$newAlu->sex = $alumno['sexo'];
    				$newAlu->birthdate = $alumno['fecha'];
    				$newAlu->save();
    			}
    			else{
    				$DBAlu->status = $alumno['estatus'];
    				$DBAlu->save();
    			}
    		}
    	}
    }

    public function MisGrupos(){
    }

}


?>