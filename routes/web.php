<?php

use App\Models\Turno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/talleres', function () {
    return view('talleres');
})->name('talleres');
Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');
Route::get('/docentes', function () {
    return view('docentes');
})->name('docentes');

Route::get('/tour', function () {
    return view('tour');
})->name('tour');



//rutas para la configuraciones del sistema
Route::get('/admin/configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('admin.configuracion.index')->middleware('auth');
Route::post('/admin/configuracion/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])->name('admin.configuracion.store')->middleware('auth');

//rutas para la gestiones del sistema
Route::get('/admin/gestiones', [App\Http\Controllers\Admin\Academico\GestionController::class, 'index'])->name('admin.gestiones.index')->middleware('auth');
Route::get('/admin/gestiones/create', [App\Http\Controllers\Admin\Academico\GestionController::class, 'create'])->name('admin.gestiones.create')->middleware('auth');
Route::post('/admin/gestiones', [App\Http\Controllers\Admin\Academico\GestionController::class, 'store'])->name('admin.gestiones.store')->middleware('auth');  
Route::get('/admin/gestiones/{gestion}/edit', [App\Http\Controllers\Admin\Academico\GestionController::class, 'edit'])->name('admin.gestiones.edit')->middleware('auth');
Route::put('/admin/gestiones/{gestion}', [App\Http\Controllers\Admin\Academico\GestionController::class, 'update'])->name('admin.gestiones.update')->middleware('auth');
Route::delete('/admin/gestiones/{gestion}', [App\Http\Controllers\Admin\Academico\GestionController::class, 'destroy'])->name('admin.gestiones.destroy')->middleware('auth');

//rutas para los periodos del sistema
Route::get('/admin/periodos', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'index'])->name('admin.periodos.index')->middleware('auth');
Route::get('/admin/periodos/create', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'create'])->name('admin.periodos.create')->middleware('auth');
Route::post('/admin/periodos/create', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'store'])->name('admin.periodos.store')->middleware('auth');
Route::get('/admin/periodos/{id}/edit', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'edit'])->name('admin.periodos.edit')->middleware('auth');
Route::put('/admin/periodos/{id}', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'update'])->name('admin.periodos.update')->middleware('auth');
Route::delete('/admin/periodos/{id}', [App\Http\Controllers\Admin\Academico\PeriodoController::class, 'destroy'])->name('admin.periodos.destroy')->middleware('auth');



//rutas para los niveles del sistema
Route::get('/admin/niveles', [App\Http\Controllers\Admin\Academico\NivelController::class, 'index'])->name('admin.niveles.index')->middleware('auth');
Route::post('/admin/niveles/create', [App\Http\Controllers\Admin\Academico\NivelController::class, 'store'])->name('admin.niveles.store')->middleware('auth');  
Route::put('/admin/niveles/{id}', [App\Http\Controllers\Admin\Academico\NivelController::class, 'update'])->name('admin.niveles.update')->middleware('auth');
Route::delete('/admin/niveles/{id}', [App\Http\Controllers\Admin\Academico\NivelController::class, 'destroy'])->name('admin.niveles.destroy')->middleware('auth');

//rutas para los turnos del sistema
Route::get('/admin/turnos', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'index'])->name('admin.turnos.index')->middleware('auth');
Route::get('/admin/turnos/create', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'create'])->name('admin.turnos.create')->middleware('auth');
Route::post('/admin/turnos/create', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'store'])->name('admin.turnos.store')->middleware('auth');  
Route::get('/admin/turnos/{id}/edit', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'edit'])->name('admin.turnos.edit')->middleware('auth');
Route::put('/admin/turnos/{id}', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'update'])->name('admin.turnos.update')->middleware('auth');
Route::delete('/admin/turnos/{id}', [App\Http\Controllers\Admin\Academico\TurnoController::class, 'destroy'])->name('admin.turnos.destroy')->middleware('auth');


//rutas para los horarios del sistema
Route::get('/admin/horarios', [App\Http\Controllers\Admin\Procesos\HorarioController::class, 'index'])->name('admin.horarios.index')->middleware('auth');
Route::get('/admin/horarios/{horario}', [App\Http\Controllers\Admin\Procesos\HorarioController::class, 'show'])->name('admin.horarios.show')->middleware('auth');
Route::post('/admin/horarios/create', [App\Http\Controllers\Admin\Procesos\HorarioController::class, 'store'])->name('admin.horarios.store')->middleware('auth');  
Route::put('/admin/horarios/{horario}', [App\Http\Controllers\Admin\Procesos\HorarioController::class, 'update'])->name('admin.horarios.update')->middleware('auth');
Route::delete('/admin/horarios/{horario}', [App\Http\Controllers\Admin\Procesos\HorarioController::class, 'destroy'])->name('admin.horarios.destroy')->middleware('auth');

//rutas para los docentes del sistema
Route::get('/admin/docentes', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'index'])->name('admin.docentes.index')->middleware('auth');
Route::get('/admin/docentes/{docente}', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'show'])->name('admin.docentes.show')->middleware('auth');
Route::post('/admin/docentes/create', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'store'])->name('admin.docentes.store')->middleware('auth');  
Route::put('/admin/docentes/{docente}', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'update'])->name('admin.docentes.update')->middleware('auth');
Route::delete('/admin/docentes/{docente}', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'destroy'])->name('admin.docentes.destroy')->middleware('auth');
// Asegúrate de que esta línea existe
Route::get('/admin/docentes/{docente}/edit', [App\Http\Controllers\Admin\Roles\DocenteController::class, 'edit'])->name('admin.docentes.edit')->middleware('auth');
//rutas para los tutores del sistema
Route::get('/admin/tutores', [App\Http\Controllers\Admin\Roles\TutorController::class, 'index'])->name('admin.tutores.index')->middleware('auth');
Route::get('/admin/tutores/{tutor}', [App\Http\Controllers\Admin\Roles\TutorController::class, 'show'])->name('admin.tutores.show')->middleware('auth');
Route::post('/admin/tutores/create', [App\Http\Controllers\Admin\Roles\TutorController::class, 'store'])->name('admin.tutores.store')->middleware('auth');  
Route::put('/admin/tutores/{tutor}', [App\Http\Controllers\Admin\Roles\TutorController::class, 'update'])->name('admin.tutores.update')->middleware('auth');
Route::delete('/admin/tutores/{tutor}', [App\Http\Controllers\Admin\Roles\TutorController::class, 'destroy'])->name('admin.tutores.destroy')->middleware('auth');

//rutas para los estudiantes del sistema
Route::get('/admin/estudiantes', [App\Http\Controllers\Admin\Roles\EstudianteController::class, 'index'])->name('admin.estudiantes.index')->middleware('auth');
Route::get('/admin/estudiantes/{estudiante}', [App\Http\Controllers\Admin\Roles\EstudianteController::class, 'show'])->name('admin.estudiantes.show')->middleware('auth');
Route::post('/admin/estudiantes/create', [App\Http\Controllers\Admin\Roles\EstudianteController::class, 'store'])->name('admin.estudiantes.store')->middleware('auth');  
Route::put('/admin/estudiantes/{estudiante}', [App\Http\Controllers\Admin\Roles\EstudianteController::class, 'update'])->name('admin.estudiantes.update')->middleware('auth');
Route::delete('/admin/estudiantes/{estudiante}', [App\Http\Controllers\Admin\Roles\EstudianteController::class, 'destroy'])->name('admin.estudiantes.destroy')->middleware('auth');

// Rutas para los cursos del sistema
Route::get('/admin/cursos', [App\Http\Controllers\Admin\Academico\CursoController::class, 'index'])->name('admin.cursos.index')->middleware('auth');
Route::get('/admin/cursos/{curso}', [App\Http\Controllers\Admin\Academico\CursoController::class, 'show'])->name('admin.cursos.show')->middleware('auth');
Route::post('/admin/cursos/create', [App\Http\Controllers\Admin\Academico\CursoController::class, 'store'])->name('admin.cursos.store')->middleware('auth');
Route::put('/admin/cursos/{curso}', [App\Http\Controllers\Admin\Academico\CursoController::class, 'update'])->name('admin.cursos.update')->middleware('auth');
Route::delete('/admin/cursos/{curso}', [App\Http\Controllers\Admin\Academico\CursoController::class, 'destroy'])->name('admin.cursos.destroy')->middleware('auth');

// Rutas para los grados del sistema
Route::get('/admin/grados', [App\Http\Controllers\Admin\Academico\GradoController::class, 'index'])->name('admin.grados.index')->middleware('auth');
Route::get('/admin/grados/{grado}', [App\Http\Controllers\Admin\Academico\GradoController::class, 'show'])->name('admin.grados.show')->middleware('auth');
Route::post('/admin/grados/create', [App\Http\Controllers\Admin\Academico\GradoController::class, 'store'])->name('admin.grados.store')->middleware('auth');
Route::put('/admin/grados/{grado}', [App\Http\Controllers\Admin\Academico\GradoController::class, 'update'])->name('admin.grados.update')->middleware('auth');
Route::delete('/admin/grados/{grado}', [App\Http\Controllers\Admin\Academico\GradoController::class, 'destroy'])->name('admin.grados.destroy')->middleware('auth');

// Rutas para asignación de docentes a cursos
Route::get('/admin/asignaciones', [App\Http\Controllers\Admin\Procesos\AsignacionDocenteController::class, 'index'])->name('admin.asignaciones.index')->middleware('auth');
Route::get('/admin/asignaciones/{id}', [App\Http\Controllers\Admin\Procesos\AsignacionDocenteController::class, 'show'])->name('admin.asignaciones.show')->middleware('auth');
Route::post('/admin/asignaciones/create', [App\Http\Controllers\Admin\Procesos\AsignacionDocenteController::class, 'store'])->name('admin.asignaciones.store')->middleware('auth');
Route::put('/admin/asignaciones/{id}', [App\Http\Controllers\Admin\Procesos\AsignacionDocenteController::class, 'update'])->name('admin.asignaciones.update')->middleware('auth');
Route::delete('/admin/asignaciones/{id}', [App\Http\Controllers\Admin\Procesos\AsignacionDocenteController::class, 'destroy'])->name('admin.asignaciones.destroy')->middleware('auth');

// Rutas para matrículas
Route::get('/admin/matriculas', [App\Http\Controllers\Admin\Procesos\MatriculaController::class, 'index'])->name('admin.matriculas.index')->middleware('auth');
Route::get('/admin/matriculas/{id}', [App\Http\Controllers\Admin\Procesos\MatriculaController::class, 'show'])->name('admin.matriculas.show')->middleware('auth');
Route::post('/admin/matriculas/create', [App\Http\Controllers\Admin\Procesos\MatriculaController::class, 'store'])->name('admin.matriculas.store')->middleware('auth');
Route::put('/admin/matriculas/{id}', [App\Http\Controllers\Admin\Procesos\MatriculaController::class, 'update'])->name('admin.matriculas.update')->middleware('auth');
Route::delete('/admin/matriculas/{id}', [App\Http\Controllers\Admin\Procesos\MatriculaController::class, 'destroy'])->name('admin.matriculas.destroy')->middleware('auth');

// Rutas para relación tutor-estudiante
Route::get('/admin/tutor-estudiante', [App\Http\Controllers\Admin\Registros\TutorEstudianteController::class, 'index'])->name('admin.tutor-estudiante.index')->middleware('auth');
Route::get('/admin/tutor-estudiante/{id}', [App\Http\Controllers\Admin\Registros\TutorEstudianteController::class, 'show'])->name('admin.tutor-estudiante.show')->middleware('auth');
Route::post('/admin/tutor-estudiante/create', [App\Http\Controllers\Admin\Registros\TutorEstudianteController::class, 'store'])->name('admin.tutor-estudiante.store')->middleware('auth');
Route::put('/admin/tutor-estudiante/{id}', [App\Http\Controllers\Admin\Registros\TutorEstudianteController::class, 'update'])->name('admin.tutor-estudiante.update')->middleware('auth');
Route::delete('/admin/tutor-estudiante/{id}', [App\Http\Controllers\Admin\Registros\TutorEstudianteController::class, 'destroy'])->name('admin.tutor-estudiante.destroy')->middleware('auth');

// Rutas para asistencias
Route::get('/admin/asistencias', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'index'])->name('admin.asistencias.index')->middleware('auth');
Route::get('/admin/asistencias/{id}', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'show'])->name('admin.asistencias.show')->middleware('auth');
Route::post('/admin/asistencias/create', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'store'])->name('admin.asistencias.store')->middleware('auth');
Route::put('/admin/asistencias/{id}', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'update'])->name('admin.asistencias.update')->middleware('auth');
Route::delete('/admin/asistencias/{id}', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'destroy'])->name('admin.asistencias.destroy')->middleware('auth');
Route::post('/admin/asistencias/registro-masivo', [App\Http\Controllers\Admin\Registros\AsistenciaController::class, 'registroMasivo'])->name('admin.asistencias.registro-masivo')->middleware('auth');

// Rutas para notas
Route::get('/admin/notas', [App\Http\Controllers\Admin\Registros\NotaController::class, 'index'])->name('admin.notas.index')->middleware('auth');
Route::get('/admin/notas/{id}', [App\Http\Controllers\Admin\Registros\NotaController::class, 'show'])->name('admin.notas.show')->middleware('auth');
Route::post('/admin/notas/create', [App\Http\Controllers\Admin\Registros\NotaController::class, 'store'])->name('admin.notas.store')->middleware('auth');
Route::put('/admin/notas/{id}', [App\Http\Controllers\Admin\Registros\NotaController::class, 'update'])->name('admin.notas.update')->middleware('auth');
Route::delete('/admin/notas/{id}', [App\Http\Controllers\Admin\Registros\NotaController::class, 'destroy'])->name('admin.notas.destroy')->middleware('auth');
Route::post('/admin/notas/{id}/publicar', [App\Http\Controllers\Admin\Registros\NotaController::class, 'publicar'])->name('admin.notas.publicar')->middleware('auth');
Route::post('/admin/notas/{id}/despublicar', [App\Http\Controllers\Admin\Registros\NotaController::class, 'despublicar'])->name('admin.notas.despublicar')->middleware('auth');

Route::get('/admin/comportamientos', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'index'])->name('admin.comportamientos.index')->middleware('auth');
Route::get('/admin/comportamientos/{id}', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'show'])->name('admin.comportamientos.show')->middleware('auth');
Route::post('/admin/comportamientos/create', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'store'])->name('admin.comportamientos.store')->middleware('auth');
Route::put('/admin/comportamientos/{id}', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'update'])->name('admin.comportamientos.update')->middleware('auth');
Route::delete('/admin/comportamientos/{id}', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'destroy'])->name('admin.comportamientos.destroy')->middleware('auth');
Route::post('/admin/comportamientos/{id}/notificar', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'notificar'])->name('admin.comportamientos.notificar')->middleware('auth');
Route::post('/admin/comportamientos/{id}/cancelar-notificacion', [App\Http\Controllers\Admin\Registros\ComportamientoController::class, 'cancelarNotificacion'])->name('admin.comportamientos.cancelar-notificacion')->middleware('auth');

// Rutas para reportes
Route::get('/admin/reportes', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'index'])->name('admin.reportes.index')->middleware('auth');
Route::get('/admin/reportes/{id}', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'show'])->name('admin.reportes.show')->middleware('auth');
Route::post('/admin/reportes/create', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'store'])->name('admin.reportes.store')->middleware('auth');
Route::put('/admin/reportes/{id}', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'update'])->name('admin.reportes.update')->middleware('auth');
Route::delete('/admin/reportes/{id}', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'destroy'])->name('admin.reportes.destroy')->middleware('auth');
Route::post('/admin/reportes/{id}/publicar', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'publicar'])->name('admin.reportes.publicar')->middleware('auth');
Route::post('/admin/reportes/{id}/despublicar', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'despublicar'])->name('admin.reportes.despublicar')->middleware('auth');
Route::post('/admin/reportes/{id}/calcular-datos', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'calcularDatos'])->name('admin.reportes.calcular-datos')->middleware('auth');
Route::get('/admin/reportes/{id}/descargar-pdf', [App\Http\Controllers\Admin\Registros\ReporteController::class, 'descargarPdf'])->name('admin.reportes.descargar-pdf')->middleware('auth');


Route::get('/admin/administradores', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'index'])->name('admin.administradores.index');
Route::get('/admin/administradores/{id}', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'show'])->name('admin.administradores.show');
Route::post('/admin/administradores/create', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'store'])->name('admin.administradores.store');
Route::put('/admin/administradores/{id}', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'update'])->name('admin.administradores.update');
 Route::delete('/admin/administradores/{id}', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'destroy'])->name('admin.administradores.destroy');
Route::post('/admin/administradores/{id}/activar', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'activar'])->name('admin.administradores.activar');
Route::post('/admin/administradores/{id}/desactivar', [App\Http\Controllers\Admin\Roles\AdministradorController::class, 'desactivar'])->name('admin.administradores.desactivar');

Route::get('/admin/permissions', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'index'])->name('admin.permissions.index');
    Route::get('/admin/permissions/{id}', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'show'])->name('admin.permissions.show');
    Route::post('/admin/permissions/create', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'store'])->name('admin.permissions.store');
    Route::put('/admin/permissions/{id}', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'update'])->name('admin.permissions.update');
    Route::delete('/admin/permissions/{id}', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'destroy'])->name('admin.permissions.destroy');
    Route::post('/admin/permissions/{id}/asignar-rol', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'asignarRol'])->name('admin.permissions.asignar-rol');
    Route::post('/admin/permissions/{id}/remover-rol', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'removerRol'])->name('admin.permissions.remover-rol');
    Route::post('/admin/permissions/crear-crud', [App\Http\Controllers\Admin\Roles\PermissionController::class, 'crearCRUD'])->name('admin.permissions.crear-crud');

    Route::get('/admin/roles', [App\Http\Controllers\Admin\Roles\RoleController::class, 'index'])->name('admin.roles.index');
    Route::get('/admin/roles/{id}', [App\Http\Controllers\Admin\Roles\RoleController::class, 'show'])->name('admin.roles.show');
    Route::post('/admin/roles/create', [App\Http\Controllers\Admin\Roles\RoleController::class, 'store'])->name('admin.roles.store');
    Route::put('/admin/roles/{id}', [App\Http\Controllers\Admin\Roles\RoleController::class, 'update'])->name('admin.roles.update');
    Route::delete('/admin/roles/{id}', [App\Http\Controllers\Admin\Roles\RoleController::class, 'destroy'])->name('admin.roles.destroy');
    Route::post('/admin/roles/{id}/asignar-permiso', [App\Http\Controllers\Admin\Roles\RoleController::class, 'asignarPermiso'])->name('admin.roles.asignar-permiso');
    Route::post('/admin/roles/{id}/remover-permiso', [App\Http\Controllers\Admin\Roles\RoleController::class, 'removerPermiso'])->name('admin.roles.remover-permiso');
    Route::post('/admin/roles/{id}/asignar-usuario', [App\Http\Controllers\Admin\Roles\RoleController::class, 'asignarUsuario'])->name('admin.roles.asignar-usuario');
    Route::post('/admin/roles/{id}/remover-usuario', [App\Http\Controllers\Admin\Roles\RoleController::class, 'removerUsuario'])->name('admin.roles.remover-usuario');

     Route::get('/admin/usuarios', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'index'])->name('admin.usuarios.index');
    Route::get('/admin/usuarios/{id}', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'show'])->name('admin.usuarios.show');
    Route::post('/admin/usuarios/create', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'store'])->name('admin.usuarios.store');
    Route::put('/admin/usuarios/{id}', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'update'])->name('admin.usuarios.update');
    Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'destroy'])->name('admin.usuarios.destroy');
    
    // Acciones especiales
    Route::post('/admin/usuarios/{id}/verificar-email', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'verificarEmail'])->name('admin.usuarios.verificar-email');
    Route::post('/admin/usuarios/{id}/quitar-verificacion', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'quitarVerificacionEmail'])->name('admin.usuarios.quitar-verificacion');
    Route::post('/admin/usuarios/{id}/cambiar-password', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'cambiarPassword'])->name('admin.usuarios.cambiar-password');
    Route::post('/admin/usuarios/{id}/activar', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'activar'])->name('admin.usuarios.activar');
    Route::post('/admin/usuarios/{id}/desactivar', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'desactivar'])->name('admin.usuarios.desactivar');
    Route::post('/admin/usuarios/{id}/vincular-persona', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'vincularPersona'])->name('admin.usuarios.vincular-persona');
    Route::post('/admin/usuarios/{id}/desvincular-persona', [App\Http\Controllers\Admin\Seguridad\UserController::class, 'desvincularPersona'])->name('admin.usuarios.desvincular-persona');

    Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\Sistema\DashboardController::class, 'index'])->name('admin.dashboard.index');


    Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    // Rutas CRUD estándar
    Route::resource('configuracion', App\Http\Controllers\Admin\Sistema\ConfiguracionController::class);
    
    // Rutas especiales
    Route::get('configuracion-global', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'global'])
        ->name('configuracion.global');
    Route::post('configuracion-global', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'actualizarGlobal'])
        ->name('configuracion.actualizar-global');
    Route::get('configuracion-restaurar', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'restaurarDefecto'])
        ->name('configuracion.restaurar-defecto');
    Route::post('configuracion/{id}/valor', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'actualizarValor'])
        ->name('configuracion.actualizar-valor');
    Route::get('configuracion/exportar', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'exportar'])
        ->name('configuracion.exportar');
    
    // API Routes
    Route::get('api/configuracion/categoria/{categoria}', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'porCategoria'])
        ->name('configuracion.por-categoria');
    Route::get('api/configuracion/valor/{clave}', [App\Http\Controllers\Admin\Sistema\ConfiguracionController::class, 'obtenerValor'])
        ->name('configuracion.obtener-valor');
});

});




//ruta para la carta de presentaciondel sistema
Route::get('/carta', [App\Http\Controllers\CartaController::class, 'index'])->name('carta.index')->middleware('auth');