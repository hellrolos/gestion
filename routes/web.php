<?php
//Rutas de prueba para el manejo de los webservices
Route::get('ws', 'WebServiceController@index');
// Rutas que se usan para la Authentificación de usuarios
Route::get('/', 'Auth\LoginController@showLogin')->name('inicio');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');
//Rutas exclusivas del administrador
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/migraciones', 'AdminController@migraciones')->name('migraciones');
Route::get('/admin/migraciones/cargashorarias', 'AdminController@cargashorarias')->name('cargashorarias');
Route::get('/admin/migraciones/grupos', 'AdminController@grupos')->name('grupos');
Route::get('/admin/migraciones/planes', 'AdminController@planes')->name('planes');
Route::get('/admin/migraciones/reticulas', 'AdminController@reticulas')->name('reticulas');
Route::get('/admin/migraciones/carreras', 'AdminController@carreras')->name('carreras');
Route::get('/admin/migraciones/personal', 'AdminController@personal')->name('personal');
Route::get('/admin/migraciones/departamentos', 'AdminController@departamentos')->name('departamentos');
Route::get('/admin/migraciones/asignaturas', 'AdminController@asignaturas')->name('asignaturas');
Route::get('/admin/migraciones/alumnos', 'AdminController@alumnos')->name('alumnos');
Route::get('/admin/migraciones/periodos', 'AdminController@periodos')->name('periodos');
Route::get('/admin/migraciones/organigrama', 'AdminController@organigrama')->name('organigrama');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
//Rutas de la sesión de Alumnos
Route::get('/alumno', 'AlumnoController@index')->name('alumno');
Route::get('/alumno/asignatura', 'AlumnoController@asignatura')->name('alumnoasignatura');
Route::get('/alumno/asignatura/historico', 'AlumnoController@historico')->name('alumnohistorico');
Route::get('/alumno/mensajes/recibidos', 'AlumnoController@recibidos')->name('alumnorecibidos');
Route::get('/alumno/mensajes/enviados', 'AlumnoController@enviados')->name('alumnoenviados');
Route::get('/alumno/calendario', 'AlumnoController@calendario')->name('alumnocalendario');
//Rutas de la sesión de Docentes
Route::get('/docente', 'DocenteController@index')->name('docente');
Route::get('/docente/asignatura',  'DocenteController@asignatura')->name('docenteasignatura');
Route::get('/docente/asignatura/historico', 'DocenteController@historico')->name('docentehistorico');
Route::get('/docente/mensajes/recibidos', 'DocenteController@recibidos')->name('docenterecibidos');
Route::get('/docente/mensajes/enviados', 'DocenteController@enviados')->name('docenteenviados');
Route::get('/docente/calendario', 'DocenteController@calendario')->name('docentecalendario');
Route::get('/docente/academia/aprobaciones', 'DocenteController@aprobaciones')->name('docenteaprobaciones');
Route::get('/docente/academia', 'DocenteController@academia')->name('docenteacademia');
Route::get('/docente/subdireccion/academias', 'DocenteController@academias')->name('docenteacademias');
Route::get('/docente/subdireccion/estatus', 'DocenteController@estatus')->name('docenteestatus');

//fin de rutas