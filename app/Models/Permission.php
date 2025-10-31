<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'display_name',
        'description',
        'module',
    ];

    // Relaciones
    
    /**
     * Relación con roles (N:N)
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role')
                    ->withTimestamps();
    }

    // Scopes
    
    /**
     * Scope para filtrar por módulo
     */
    public function scopePorModulo($query, $modulo)
    {
        return $query->where('module', $modulo);
    }

    /**
     * Scope para buscar por nombre
     */
    public function scopeBuscar($query, $termino)
    {
        return $query->where('name', 'like', "%{$termino}%")
                    ->orWhere('display_name', 'like', "%{$termino}%")
                    ->orWhere('description', 'like', "%{$termino}%");
    }

    // Accessors
    
    /**
     * Badge de módulo
     */
    public function getModuloBadgeAttribute()
    {
        $badges = [
            'Usuarios' => 'primary',
            'Academico' => 'success',
            'Comunicacion' => 'info',
            'Procesos' => 'warning',
            'Registros' => 'danger',
            'Roles' => 'dark',
            'Seguridad' => 'secondary',
            'Sistema' => 'indigo',
        ];
        
        return $badges[$this->module] ?? 'secondary';
    }

    /**
     * Icono de módulo
     */
    public function getModuloIconAttribute()
    {
        $icons = [
            'Usuarios' => 'fa-users',
            'Academico' => 'fa-graduation-cap',
            'Comunicacion' => 'fa-comments',
            'Procesos' => 'fa-cogs',
            'Registros' => 'fa-clipboard-list',
            'Roles' => 'fa-user-shield',
            'Seguridad' => 'fa-lock',
            'Sistema' => 'fa-server',
        ];
        
        return $icons[$this->module] ?? 'fa-cube';
    }

    // Métodos
    
    /**
     * Verificar si el permiso está asignado a algún rol
     */
    public function estaAsignado()
    {
        return $this->roles()->count() > 0;
    }

    /**
     * Obtener cantidad de roles que tienen este permiso
     */
    public function getCantidadRolesAttribute()
    {
        return $this->roles()->count();
    }

    /**
     * Asignar permiso a un rol
     */
    public function asignarARol($roleId)
    {
        if (!$this->roles()->where('role_id', $roleId)->exists()) {
            $this->roles()->attach($roleId);
        }
    }

    /**
     * Remover permiso de un rol
     */
    public function removerDeRol($roleId)
    {
        $this->roles()->detach($roleId);
    }

    /**
     * Sincronizar con roles
     */
    public function sincronizarRoles($rolesIds)
    {
        $this->roles()->sync($rolesIds);
    }

    // Métodos estáticos
    
    /**
     * Obtener estadísticas
     */
    public static function obtenerEstadisticas()
    {
        return [
            'total' => self::count(),
            'asignados' => self::has('roles')->count(),
            'sin_asignar' => self::doesntHave('roles')->count(),
            'por_modulo' => self::selectRaw('module, COUNT(*) as total')
                                ->groupBy('module')
                                ->pluck('total', 'module')
                                ->toArray(),
        ];
    }

    /**
     * Obtener módulos únicos
     */
    public static function obtenerModulos()
    {
        return self::whereNotNull('module')
                   ->distinct()
                   ->pluck('module')
                   ->toArray();
    }

    /**
     * Obtener permisos por módulo agrupados
     */
    public static function obtenerPorModuloAgrupado()
    {
        return self::orderBy('module')
                   ->orderBy('display_name')
                   ->get()
                   ->groupBy('module');
    }

    /**
     * Crear permisos CRUD para un módulo
     */
    public static function crearPermisoCRUD($modulo, $entidad)
    {
        $acciones = ['ver', 'crear', 'editar', 'eliminar'];
        $permisos = [];

        foreach ($acciones as $accion) {
            $permiso = self::create([
                'name' => "{$accion}.{$entidad}",
                'display_name' => ucfirst($accion) . " {$entidad}",
                'description' => "Permiso para {$accion} {$entidad}",
                'module' => $modulo,
            ]);
            $permisos[] = $permiso;
        }

        return $permisos;
    }

    /**
     * Buscar permiso por nombre
     */
    public static function buscarPorNombre($nombre)
    {
        return self::where('name', $nombre)->first();
    }
}