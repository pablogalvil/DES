<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function destroy($id){
        //Con find sacamos el cliente con el id que le introducimos en la base de datos
        $cliente = Cliente::find($id);
        //Con el cliente recuperado lo borramos utilizando delete
        $cliente->delete();
        //Redireccionamos a la lista de clientes
        return redirect()->route('clientes.index')->with('success', 'El cliente se ha borrado correctamente');
    }

    public function edit($id){
        //Con findOrFail buscamos el cliente con el id y si no lo encuentra devuelve un error
        $cliente = Cliente::findOrFail($id);
        //Con el cliente recuperado lo mostramos utilizando edit
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255|min:8',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:255',
            'direccion' => 'required|string|max:255|min:8'
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'El cliente se ha actualizado correctamente');
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255|min:8',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:255',
            'direccion' => 'required|string|max:255|min:8'
        ]);
        $cliente = Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'El cliente se ha creado correctamente');
    }
}
