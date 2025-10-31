<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutores = Tutor::with(['persona', 'estudiantes'])->get();
        return view('admin.tutores.index', compact('tutores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vista manejada en el modal del index
        return redirect()->route('admin.tutores.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni_create' => 'required|max:20|unique:personas,dni',
            'nombres_create' => 'required|max:100',
            'apellidos_create' => 'required|max:100',
            'fecha_nacimiento_create' => 'required|date|before:today',
            'genero_create' => 'required|in:M,F,Otro',
            'direccion_create' => 'nullable|max:255',
            'telefono_create' => 'nullable|max:20',
            'telefono_emergencia_create' => 'nullable|max:20',
            'estado_create' => 'required|in:Activo,Inactivo',
            'codigo_tutor_create' => 'nullable|max:50|unique:tutores,codigo_tutor',
            'ocupacion_create' => 'nullable|max:100',
        ]);
        
        DB::beginTransaction();
        try {
            // Crear persona
            $persona = new Persona();
            $persona->dni = $request->dni_create;
            $persona->nombres = $request->nombres_create;
            $persona->apellidos = $request->apellidos_create;
            $persona->fecha_nacimiento = $request->fecha_nacimiento_create;
            $persona->genero = $request->genero_create;
            $persona->direccion = $request->direccion_create;
            $persona->telefono = $request->telefono_create;
            $persona->telefono_emergencia = $request->telefono_emergencia_create;
            $persona->estado = $request->estado_create;
            $persona->save();
            
            // Crear tutor
            $tutor = new Tutor();
            $tutor->persona_id = $persona->id;
            $tutor->codigo_tutor = $request->codigo_tutor_create;
            $tutor->ocupacion = $request->ocupacion_create;
            $tutor->save();
            
            DB::commit();
            
            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Tutor creado correctamente')
                ->with('icono', 'success');
                
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Error al crear el tutor')
                ->with('icono', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutor $tutor)
    {
        $tutor->load(['persona', 'estudiantes.persona']);
        return view('admin.tutores.show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor)
    {
        // Vista manejada en el modal del index
        return redirect()->route('admin.tutores.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutor $tutor)
    {
        $validate = Validator::make($request->all(), [
            'dni' => 'required|max:20|unique:personas,dni,' . $tutor->persona_id,
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'fecha_nacimiento' => 'required|date|before:today',
            'genero' => 'required|in:M,F,Otro',
            'direccion' => 'nullable|max:255',
            'telefono' => 'nullable|max:20',
            'telefono_emergencia' => 'nullable|max:20',
            'estado' => 'required|in:Activo,Inactivo',
            'codigo_tutor' => 'nullable|max:50|unique:tutores,codigo_tutor,' . $tutor->id,
            'ocupacion' => 'nullable|max:100',
        ]);

        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput()
                ->with('modal_id', $tutor->id);
        }

        DB::beginTransaction();
        try {
            // Actualizar persona
            $persona = $tutor->persona;
            $persona->dni = $request->dni;
            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->fecha_nacimiento = $request->fecha_nacimiento;
            $persona->genero = $request->genero;
            $persona->direccion = $request->direccion;
            $persona->telefono = $request->telefono;
            $persona->telefono_emergencia = $request->telefono_emergencia;
            $persona->estado = $request->estado;
            $persona->save();

            // Actualizar tutor
            $tutor->codigo_tutor = $request->codigo_tutor;
            $tutor->ocupacion = $request->ocupacion;
            $tutor->save();

            DB::commit();

            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Tutor actualizado correctamente')
                ->with('icono', 'success');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Error al actualizar el tutor')
                ->with('icono', 'error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor)
    {
        DB::beginTransaction();
        try {
            // Soft delete de la persona (esto también afectará al tutor)
            $tutor->persona->delete();
            
            DB::commit();

            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Tutor eliminado correctamente')
                ->with('icono', 'success');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.tutores.index')
                ->with('mensaje', 'Error al eliminar el tutor')
                ->with('icono', 'error');
        }
    }
}