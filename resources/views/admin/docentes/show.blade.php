@extends('adminlte::page')

@section('content_header')
    <h1><b>Editar Docente</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editar Información del Docente</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.docentes.update', $docente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <h5>Datos Personales</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dni">DNI *</label>
                                    <input type="text" class="form-control" id="dni" name="dni" 
                                           value="{{ $docente->persona->dni }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombres">Nombres *</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" 
                                           value="{{ $docente->persona->nombres }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos *</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" 
                                           value="{{ $docente->persona->apellidos }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" 
                                           value="{{ $docente->persona->fecha_nacimiento }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="genero">Género</label>
                                    <select class="form-control" id="genero" name="genero">
                                        <option value="M" {{ $docente->persona->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                                        <option value="F" {{ $docente->persona->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                                        <option value="Otro" {{ $docente->persona->genero == 'Otro' ? 'selected' : '' }}>Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" name="estado">
                                        <option value="Activo" {{ $docente->persona->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                                        <option value="Inactivo" {{ $docente->persona->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <textarea class="form-control" id="direccion" name="direccion" rows="2">{{ $docente->persona->direccion }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" 
                                           value="{{ $docente->persona->telefono }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefono_emergencia">Teléfono de Emergencia</label>
                                    <input type="text" class="form-control" id="telefono_emergencia" name="telefono_emergencia" 
                                           value="{{ $docente->persona->telefono_emergencia }}">
                                </div>
                            </div>
                        </div>

                        <h5 class="mt-4">Datos Laborales</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="codigo_docente">Código Docente *</label>
                                    <input type="text" class="form-control" id="codigo_docente" name="codigo_docente" 
                                           value="{{ $docente->codigo_docente }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="especialidad">Especialidad</label>
                                    <input type="text" class="form-control" id="especialidad" name="especialidad" 
                                           value="{{ $docente->especialidad }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fecha_contratacion">Fecha de Contratación</label>
                                    <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" 
                                           value="{{ $docente->fecha_contratacion }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo_contrato">Tipo de Contrato</label>
                                    <select class="form-control" id="tipo_contrato" name="tipo_contrato">
                                        <option value="Nombrado" {{ $docente->tipo_contrato == 'Nombrado' ? 'selected' : '' }}>Nombrado</option>
                                        <option value="Contratado" {{ $docente->tipo_contrato == 'Contratado' ? 'selected' : '' }}>Contratado</option>
                                        <option value="Temporal" {{ $docente->tipo_contrato == 'Temporal' ? 'selected' : '' }}>Temporal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ route('admin.docentes.show', $docente->id) }}" class="btn btn-secondary">
                                        <i class="fas fa-arrow-left"></i> Cancelar
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-save"></i> Guardar Cambios
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop