@extends('adminlte::page')

@section('content_header')
    <h1><b>Detalle del Tutor</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Información del Tutor</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5>Datos Personales</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">DNI</label>
                                        <p>{{ $tutor->persona->dni }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <p>{{ $tutor->persona->nombres }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        <p>{{ $tutor->persona->apellidos }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        <p>{{ \Carbon\Carbon::parse($tutor->persona->fecha_nacimiento)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Edad</label>
                                        <p>{{ \Carbon\Carbon::parse($tutor->persona->fecha_nacimiento)->age }} años</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <p>
                                            @if($tutor->persona->genero == 'M')
                                                Masculino
                                            @elseif($tutor->persona->genero == 'F')
                                                Femenino
                                            @else
                                                Otro
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <p>{{ $tutor->persona->direccion ?? 'No especificada' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <p>{{ $tutor->persona->telefono ?? 'No especificado' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Teléfono de Emergencia</label>
                                        <p>{{ $tutor->persona->telefono_emergencia ?? 'No especificado' }}</p>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-3">Información del Tutor</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Código Tutor</label>
                                        <p><strong>{{ $tutor->codigo_tutor ?? 'No asignado' }}</strong></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ocupación</label>
                                        <p>{{ $tutor->ocupacion ?? 'No especificada' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        <p>
                                            @if($tutor->persona->estado == 'Activo')
                                                <span class="badge badge-success">Activo</span>
                                            @else
                                                <span class="badge badge-danger">Inactivo</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                @if($tutor->persona->foto_perfil)
                                    <img src="{{ asset('storage/'.$tutor->persona->foto_perfil) }}" 
                                         alt="Foto de {{ $tutor->persona->nombres }}" 
                                         class="img-thumbnail" 
                                         style="max-width: 200px;">
                                @else
                                    <div class="bg-light p-5 rounded">
                                        <i class="fas fa-user fa-5x text-muted"></i>
                                        <p class="text-muted mt-2">Sin foto</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    @if($tutor->estudiantes->count() > 0)
                        <h5 class="mt-4">Estudiantes a Cargo</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Estudiante</th>
                                            <th>Grado</th>
                                            <th>Relación</th>
                                            <th>Tipo</th>
                                            <th>Autorizado para Recojo</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tutor->estudiantes as $estudiante)
                                            <tr>
                                                <td>{{ $estudiante->codigo_estudiante }}</td>
                                                <td>{{ $estudiante->persona->apellidos }} {{ $estudiante->persona->nombres }}</td>
                                                <td>{{ $estudiante->grado->nombre ?? '-' }}</td>
                                                <td>{{ $estudiante->pivot->relacion_familiar }}</td>
                                                <td>
                                                    @if($estudiante->pivot->tipo == 'Principal')
                                                        <span class="badge badge-primary">{{ $estudiante->pivot->tipo }}</span>
                                                    @else
                                                        <span class="badge badge-secondary">{{ $estudiante->pivot->tipo }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($estudiante->pivot->autorizacion_recojo)
                                                        <span class="badge badge-success">Sí</span>
                                                    @else
                                                        <span class="badge badge-danger">No</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($estudiante->pivot->estado == 'Activo')
                                                        <span class="badge badge-success">Activo</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactivo</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ route('admin.tutores.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Volver
                                </a>
                                <a href="#" class="btn btn-success" data-toggle="modal" 
                                   data-target="#editTutorModal{{ $tutor->id }}">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop