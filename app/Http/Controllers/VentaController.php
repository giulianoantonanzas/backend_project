<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\DetalleFactura;
use App\Factura;
use App\Producto;
use App\ProductoFacturado;
use App\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // consulta sql , traigo las ventas con todas sus relaciones. y muestro lo que quiero
        $ventas['ventas'] = DB::select('SELECT v.id, v.factura_id ,f.fecha_facturacion,c.nombre,c.apellido,df.total_pagar 
        FROM ventas v,  facturas f ,clientes c, detalle_facturas df
        WHERE v.factura_id=f.id and f.cliente_id=c.id and f.detalle_factura_id =df.id');

        return view('ventas.index', $ventas);
    }


    public function search(Request $request)
    {
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //envio los todos los clientes y los productos. Ellos seran gestionados con las tablas y mostrare sus valores.
        $productos['productos'] = Producto::all();
        $clientes['clientes'] = Cliente::all();
        return view('ventas.create', $productos, $clientes);
        #return view('ventas.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        //genero detalle factura y obtengo su id
        $idDetalleFactura = DetalleFactura::insertGetId([
            'iva' => $data['iva'],
            'total_pagar' => $data['total_pagar']
        ]);

        //mientras haya productos que hayan sido facturados, hay que ir guardandolos.
        //genera productos facturados.
        $contador = 0;
        while (isset($data["idProducto$contador"])) {
            ProductoFacturado::insert([
                'detalle_factura_id' => $idDetalleFactura,
                'producto_id' => (int)$data["idProducto$contador"],
                'cantidad' => (int)$data["cantidad_deseadaProducto$contador"],
                'precio_total' => (int)$data["precio_totalProducto$contador"]
            ]);
            $contador++;
        }

        //genero una factura y obtengo su id
        $idFactura = Factura::insertGetId([
            'cliente_id' => (int)$data['id'],
            'detalle_factura_id' => $idDetalleFactura,
            'tipo' => $data['tipo'],
            'fecha_facturacion' => $data['fecha_facturacion']
        ]);

        //genero la venta
        Venta::insert([
            'factura_id' => $idFactura
        ]);

        return redirect()->route('venta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
