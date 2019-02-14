<?php

// Realizar el listado de las rutas para todas las paginas.

Route::get('/', 'Auth\LoginController@showLogin')->name('inicio');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/alumno', 'AlumnoController@index')->name('alumno');





///// Rutas de prueba Abajo, se tienen que cambiar por controladores para cada sesión.


Route::get('ws', 'WebServiceController@index');

Route::get('/ws/{id}', 'WebServiceController@show');


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