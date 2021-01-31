<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos['productos'] = Producto::all(); // retorna los productos de la base de datos.
        return view('productos.index', $productos); //gemero la vista de productos.blade.php y le envio como parametro , los productos buscados de la bd.
    }



    public function search(Request $request)
    {
        $data = $request->except('_token'); //obtengo el texto enviado desde la busqueda
        $data=$data['search'];

        //genero la busqueda en donde obtengo los clientes con el dato enviado.
        $productos['productos'] = Producto::select()
            ->where('nombre','like',"%$data%")
            ->orWhere('marca','like',"%$data%")
            ->orWhere('detalle','like',"%$data%")
            ->get();

        return view("productos.index", $productos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
        Producto::insert($data);
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //quiero profundisar mas de como es que obtine los datos del form
        $data = $request->except('_token', '_method');

        //obtengo el cliente que tiene el mismo id y pongo la informacion que traje del formulario
        Producto::where("id", "=", $id)->update($data);

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect()->route("producto.index");
    }
}
