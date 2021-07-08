<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'InicioController@index')->name('PAGINA DE INICIO');

Route::get('suspendido' , function(){return view('suspendido');});

Auth::routes(['register' => false]);
Route::any('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('SALIR DEL SISTEMA');

Route::any('register','NoEntrarController@index');

Route::get('mi-perfil','PerfilController@verMiPerfil')->name('MI PERFIL');
Route::get('mi-clave','PerfilController@verMiClave')->name('MI CLAVE');
Route::post('actualizardatos','PerfilController@actualizaDatos')->name('ACTUALIZAR MI DATOS');
Route::get('actualizardatos','PerfilController@verMiPerfil')->name('MI PERFIL');
Route::post('actualizarclave','PerfilController@actualizaClave')->name('ACTUALIZAR MI DATOS');
Route::get('actualizarclave','PerfilController@verMiClave')->name('MI CLAVE');
Route::get('mi-configuracion', 'PerfilController@verMiConfiguracion')->name('MI CONFIGURACION');

Route::get('doctores', 'DoctorController@index')->name('DOCTORES');
Route::get('planes', 'PlanController@index')->name('PLANES INTEGRALES');
Route::get('descarga_planes', 'PlanController@descargar_cualquier_plan')->name('DESCARGAR UN PLAN CRUZ BLANCA');
Route::get('descarga_el_plan', 'PlanController@descargar_el_plan')->name('DESCARGAR PLAN CRUZ BLANCA');

Route::get('transferencia', function () {return view('transferencia');});
Route::get('pdf','PdfController@index');

Route::get('calendariohe', function () {return view('calendariohe');});

Route::get('prestaciones_imagen', 'PrestacionImagenController@index')->name('PRESTACIONES IMAGEN');
Route::get('prestaciones_laboratorio', 'PrestacionLaboratorioController@index')->name('PRESTACIONES LABORATORIO');
Route::get('valores_dia_cama', 'DiaCamaController@index_diascama')->name('DIAS_CAMA');
Route::get('comunas', 'ComunaController@index')->name('COMUNAS');
Route::get('anexos', 'AnexoController@index')->name('ANEXOS');
Route::get('seguros', 'PanelController@verSeguros')->name('SEGUROS MEDICOS');
Route::get('codigos_integrales', 'IntegralController@index_integrales')->name('CODIGOS INTEGRALES');
Route::get('descargas', 'PanelController@verDescargas')->name('DESCARGA DE DOCUMENTOS');
Route::get('rotativa', 'PanelController@verTurnos')->name('ROTATIVA DE TURNOS PERSONAL URGENCIA');



Route::get('admin', 'AdminController@index')->name('PANEL DE CONTROL ADMINISTRADOR');
Route::resource('admin/usuario', 'AdminUsuarioController');
Route::get('obtenerusuarios','AdminUsuarioController@obtenerusuariosparaadministrar')->name('obtenerusuariosparaadministrar');
Route::get('admin/usuario/{id}/reset','AdminUsuarioController@reseteaClaveUsuario')->name('reseteaClaveUsuario');

Route::get('fondo/{id}/elegido','PanelController@elijeFondo')->name('elijeFondo');

Route::resource('admin/prestacion','AdminPrestacionController');
Route::get('obtenerprestaciones','AdminPrestacionController@obtenerprestacionesparaadministrar')->name('obtenerprestacionesparaadministrar');
Route::get('prestacion/{id}/rectifica','PrestacionController@rectificaPrecioPrestacion')->name('rectificaPrecioPrestacion');
Route::post('prestacion/{id}/rectifica', 'PrestacionController@grabaRectificacion')->name('grabaRectificacion');

Route::resource('admin/auditoria','AdminAuditoriaController');
Route::get('obtenerauditorias','AdminAuditoriaController@obtenerauditoriasparaadministrar')->name('obtenerauditoriasparaadministrar');








/*Para poder correr comandos artisan en servidor compartido sin acceso ssh
Route::get('optimizar', function(){
    $limpia = Artisan::call('optimize:clear');
});*/











