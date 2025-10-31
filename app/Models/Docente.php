<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    
    protected $fillable = [
        'persona_id',
        'codigo_docente',
        'especialidad',
        'fecha_contratacion',
        'tipo_contrato'
    ];

    protected $dates = ['fecha_contratacion'];

    // Relaciones
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    // Scopes
    public function scopeActivo($query)
    {
        return $query->whereHas('persona', function($q) {
            $q->where('estado', 'Activo');
        });
    }

    // Accessors para acceder fácilmente a datos de persona
    public function getNombresAttribute()
    {
        return $this->persona->nombres;
    }

    public function getApellidosAttribute()
    {
        return $this->persona->apellidos;
    }

    public function getNombreCompletoAttribute()
    {
        return $this->persona->nombre_completo;
    }

    public function getEstadoAttribute()
    {
        return $this->persona->estado;
    }
    // Relación con asignaciones (tabla docente_curso)
    public function docenteCursos()
    {
        return $this->hasMany(DocenteCurso::class);
    }
}