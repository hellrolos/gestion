<?php

// Realizar el listado de las rutas para todas las paginas.

Route::get('ws', 'WebServiceController@index');

 Route::get('/ws/{id}', 'WebServiceController@show');

Route::get('/', function () {
	return view('login');
})->name('login');

Route::get('/alumno', function () {
    return view('alumno.inicio');
})->name('alumno');

Route::get('/alumno/asignatura', function () {
    return view('alumno.alumnoasignatura');
})->name('alumnoasignatura');

Route::get('/alumno/asignatura/historico', function () {
    return view('alumno.alumnohistorico');
})->name('alumnohistorico');

Route::get('/alumno/mensajes/recibidos', function () {
    return view('alumno.alumnorecibidos');
})->name('alumnorecibidos');

Route::get('/alumno/mensajes/enviados', function () {
    return view('alumno.alumnoenviados');
})->name('alumnoenviados');

Route::get('/alumno/calendario', function () {
    return view('alumno.alumnocalendario');
})->name('alumnocalendario');

///// Fin de las Rutas para el perfil del Alumno

Route::get('/docente', function () {
    return view('docente.inicio');
})->name('docente');

Route::get('/docente/asignatura', function () {
    return view('docente.docenteasignatura');
})->name('docenteasignatura');

Route::get('/docente/asignatura/historico', function () {
    return view('docente.docentehistorico');
})->name('docentehistorico');

Route::get('/docente/mensajes/recibidos', function () {
    return view('docente.docenterecibidos');
})->name('docenterecibidos');

Route::get('/docente/mensajes/enviados', function () {
    return view('docente.docenteenviados');
})->name('docenteenviados');

Route::get('/docente/calendario', function () {
    return view('docente.docentecalendario');
})->name('docentecalendario');


//Paso dos cambiar el tipo de rutas y usar controladores