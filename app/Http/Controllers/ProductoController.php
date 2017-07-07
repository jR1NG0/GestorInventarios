<?php

namespace GestorInventarios\Http\Controllers;

use Illuminate\Http\Request;
use GestorInventarios\Http\Requests\ProductoRequest; 


use Redirect; 
use Session;   

class ProductoController extends Controller
{   

    public function __construct()
    {   
        // utiliza el middleware auth
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all(); // se obtiene la totalidad de Libroes existentes en la BD
        $datos = array ();
        $contador = 0;

        // se obtenendran los valores de cada producto y se almacenaran en un array para ser retornados hacia la vista
        foreach ($productos as $producto) {
            $area = Area::find($producto->area_id);
            
        
            $datos[$contador]["id"] = $producto->producto_id;
            $datos[$contador]["nombre"] = $producto->nombre;
            $datos[$contador]["descripcion"] = $producto->descripcion;
            $datos[$contador]["cantidad"]= $producto->cantidad;
            $datos[$contador]["stock_min"] = $producto->stock_min;
            $datos[$contador]["area"] = $area->nombre;
        

            $contador++;
        }
        // retorno de vista y datos que listara
        return view("/productos", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $areas = area::all();
       
        
   
        return view("/crearLibro",compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(ProductoRequest  $request)
    {
        
         if (Producto::create($request->all())) { 
             Session::flash('message-success','El nuevo producto se creó exitosamente');
        } else {
            Session::flash('message-error','No se ha podido crear producto');
        }
        
      
        return Redirect::to('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::find($id);
        $autores = Autor::all();
        $generos = Genero::all();
     

        // se retorna la vista  y los datos
        return view('editLibro', compact('titulo','anno','autor','genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id); 
        $producto->fill($request->all()); 

        if ($producto->save()) {
            Session::flash('message-success','se actualizó producto exitosamente');
        } else {
           Session::flash('message-error','No se ha podido actualizar producto');
        }
        
        return Redirect::to('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id); // se busca la producto

        if ($producto->delete()) {  // se elimina
            Session::flash('message-success','se eliminó el producto exitosamente');
        } else {
           Session::flash('message-error','No se ha podido eliminar producto');
        }
        return Redirect::to('/productos');
    }

    public function missingMethod($parameters = array())
	{
		abort(404);
	}

}


	
