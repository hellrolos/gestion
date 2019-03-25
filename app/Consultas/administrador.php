<?php

namespace gestion\Consultas;
use gestion\WS\SII;
use gestion\Models\{Period, Departament, Career, Employee, Subject, Reticle, Plan, Student};
use Carbon\Carbon;

class administrador {

	protected $SIIws;

	public function __construct(SII $SII){
		$this->SIIws = $SII;
    }

	public function totalesMig(){
		$dato = "Maestros";
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
            'dato' => $dato,
        ];
        return $conteo;
	}

	public function totalPeriodos(){
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
		return Period::count();
	}

	public function totalDepartamentos(){
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
		return Departament::count();
	}

	public function totalCarreras(){
		return Career::count();
	}

	public function totalPersonal(){
		return Employee::count();
	}

	public function totalAsignaturas(){
		return Subject::count();
	}

	public function totalReticulas(){
		return Reticle::count();
	}

	public function totalPlanesReticulares(){
		return Plan::count();
	}

	public function totalAlumnos(){
		return Student::count();
	}
}

?>