<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes['clientes'] = Cliente::all(); //trae todos los clientes de la base de datos.
        return view("clientes.index", $clientes); //creo la vista de clientes (clientes.blade.php) y le envio como parametro los clientes traido de la base de datos
    }


    public function search(Request $request)
    {
        $data = $request->except('_token'); //obtengo el texto enviado desde la busqueda

        var_dump($data);

        die();
        //genero la busqueda en donde obtengo los clientes con el dato enviado.
        $clientes['clientes'] = Cliente::select()
            ->where('nombre','like',"%$data%")
            ->orWhere('apellido','like',"%$data%")
            ->orWhere('ubicacion','like',"%$data%")
            ->get();

        return view("clientes.index", $clientes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //en request esta la informacion del formulario
        $data = $request->except('_token');
        //inserta la informacion

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('uploads','public');//que hace el store upload public?
        }
        Cliente::insert($data);
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //quiero profundisar mas de como es que obtine los datos del form , en method, el valor que tenemos es put (update)
        $data = $request->except('_token','_method');

        if($request->hasFile('image')){
            $cliente=Cliente::findOrFail($id);
            Storage::delete("/public/$cliente->image"); // elimina la imagen anterior
            $data['image'] = $request->file('image')->store('uploads','public'); // carga la nueva imagen
        }

        //obtengo el cliente que tiene el mismo id y pongo la informacion que traje del formulario
        Cliente::where('id','=', $id)->update($data);
        
        return redirect()->route("cliente.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route("cliente.index");
    }
}
