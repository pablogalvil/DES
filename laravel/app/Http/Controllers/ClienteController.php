<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Storage;

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

        //Creamos al cliente con la request todos los datos menos la imagen
        $data = $request->except('imagen');

        //Si la request tiene un archivo llamado imagen
        if($request->hasFile('imagen')) {
            if ($cliente->imagen) {
                Storage::disk('public')->delete($cliente->imagen);
            }
            //La ruta de la carpeta, única para cada cliente
            $carpetaCliente = 'imagenes/clientes' . $cliente->id;

            //Guardamos el archivo en el disco duro y obtenemos la ruta completa
            $imagePath = $request->file('imagen')->store($carpetaCliente, 'public');

            $data['imagen'] = $imagePath;
        }

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

        //Creamos al cliente con la request todos los datos menos la imagen
        $cliente = Cliente::create($request->except('imagen'));

        //Si la request tiene un archivo llamado imagen
        if($request->hasFile('imagen')) {
            //La ruta de la carpeta, única para cada cliente
            $carpetaCliente = 'imagenes/clientes' . $cliente->id;

            //Guardamos el archivo en el disco duro y obtenemos la ruta completa
            $imagePath = $request->file('imagen')->store($carpetaCliente, 'public');

            //Guardamos la ruta en la BD
            $cliente->update(['imagen' => $imagePath]);
        }

        return redirect()->route('clientes.index')->with('success', 'El cliente se ha creado correctamente');
    }
}
