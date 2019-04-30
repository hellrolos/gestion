<?php

namespace gestion\Consultas;
use gestion\WS\SII;
use gestion\Models\{Period, Departament, Career, Employee, Subject, Reticle, Plan, Student, Group};
use gestion\Consultas\migracion;

class administrador {

	protected $SIIws;
	protected $Migra;

	public function __construct(SII $SII, migracion $Mig){
		$this->SIIws = $SII;
		$this->Migra = $Mig;
    }

	public function totalesMig(){
        $periodo = $this->totalPeriodos();
        $departamento = $this->totalDepartamentos();
        $carrera = $this->totalCarreras();
        $personal = $this->totalPersonal();
        $asignatura = $this->totalAsignaturas();
        $reticula = $this->totalReticulas();
        $planreticular = $this->totalPlanesReticulares();
        $alumno = $this->totalAlumnos();
        $conteo = [
            'periodo' => $periodo,
            'departamento' => $departamento,
            'carrera' => $carrera,
            'personal' => $personal,
            'asignatura' => $asignatura,
            'reticula' => $reticula,
            'planreticular' => $planreticular,
            'alumno' => $alumno,
        ];
        return $conteo;
	}

	public function totalPeriodos(){
		// $this->Migra->MisPeriodos();
		return Period::count();
	}

	public function totalDepartamentos(){
		// $this->Migra->MisDepartamentos();
		return Departament::count();
	}

	public function totalCarreras(){
		// $this->Migra->MisCarreras();
		return Career::count();
	}

	public function totalPersonal(){
		// $this->Migra->MisEmpleados();
		return Employee::count();
	}

	public function totalAsignaturas(){
		// $this->Migra->MisAsignaturas();
		return Subject::count();
	}

	public function totalReticulas(){
		//$this->Migra->MisReticulas();
		return Reticle::count();
	}

	public function totalPlanesReticulares(){
		//$this->Migra->MisPlanes();
		return Plan::count();
	}

	public function totalAlumnos(){
		//$this->Migra->MisAlumnos();
		return Student::count();
	}

	public function totalGrupos(){
		//$this->Migra->MisGrupos();
		return Group::count();
	}
}

?>