<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido_paterno' => 'nullable|string|max:50',
            'apellido_materno' => 'nullable|string|max:50',
            'fecha_llegada' => 'required|date',
            'fecha_salida' => 'required|date',
            'tipo_habitacion' => 'required|string',
            'numero_personas' => 'required|numeric',
            'correo_electronico' => 'required|string|email',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'La reservación fue creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido_paterno' => 'nullable|string|max:50',
            'apellido_materno' => 'nullable|string|max:50',
            'fecha_llegada' => 'required|date',
            'fecha_salida' => 'required|date',
            'tipo_habitacion' => 'required|string',
            'numero_personas' => 'required|numeric',
            'correo_electronico' => 'required|string|email',
            'telefono' => 'required|numeric',
            'direccion' => 'required|string',
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'La reserva se modificó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'La reserva fue eliminada');
    }
}
