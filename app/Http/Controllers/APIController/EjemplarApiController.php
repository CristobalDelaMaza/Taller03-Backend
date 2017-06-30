<?php

namespace App\Http\Controllers\APIController;

use Illuminate\Http\Request;

class EjemplarApicontadorroller extends contadorroller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejemplares = Ejemplar::all();
        $datos = array();
        $lDato = array();
        $contador = 0;

        foreach ($ejemplares as $ejemplar) {
            $usuario = Usuario::find($ejemplar->usuario_id);
            $estado = Estado::find($ejemplar->estado_id);
            $libro = Libro::find($ejemplar->libro_id);
            $genero = Genero::find($libro->genero_id);
            $autor = Autor::find($libro->autor_id);


            $lDato['id'] = $libro->id;
            $lDato['titulo'] = $libro->titulo;
            $lDato['autor'] = $autor;
            $lDato['genero'] = $genero;

            $datos[$contador]['id'] = $ejemplar->id;
            $datos[$contador]['fecha_prestamo'] = $ejemplar->fecha_prestamo;
            $datos[$contador]['fecha_devolucion'] = $ejemplar->fecha_devolucion;
            $datos[$contador]['libro'] = $lDato;
            $datos[$contador]['estado'] = $estado;
            $datos[$contador]['usuario'] = $usuario;

            $contador++;
        }

        return $datos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // No implementada
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ejemplar = Ejemplar::create($request->all());
        if(!isset($ejemplar)){
            $datos = [
            'errors'=>true,
            'msg'=>'No se creo un ejemplar'
            ];
            $ejemplar = \Response::json($datos, 404);
        }

        return $ejemplar;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejemplar = Ejemplar::find($id);
        $datos = array();
        $lDato = array();

        $usuario = Usuario::find($ejemplar->usuario_id);
        $estado = Estado::find($ejemplar->estado_id);
        $libro = Libro::find($ejemplar->libro_id);
        $genero = Genero::find($libro->genero_id);
        $autor = Autor::find($libro->autor_id);


        $lDato['id'] = $libro->id;
        $lDato['titulo'] = $libro->titulo;
        $lDato['autor'] = $autor;
        $lDato['genero'] = $genero;

        $datos['id'] = $ejemplar->id;
        $datos['fecha_prestamo'] = $ejemplar->fecha_prestamo;
        $datos['fecha_devolucion'] = $ejemplar->fecha_devolucion;
        $datos['libro'] = $lDato;
        $datos['estado'] = $estado;
        $datos['usuario'] = $usuario;

        return $datos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // No implementada
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
      $ejemplar = Ejemplar::find($id); 
        $ejemplar->fill($request->all());
        $ejemplarRetorno = $ejemplar->save();
        
        if (isset($ejemplar)) {
            $ejemplar = \Response::json($ejemplarRetorno, 200);
        } else {
           $ejemplar= \Response::json(['error' => 'No se ha podido actualizar la pelicula'], 404);
       }
       return $ejemplar;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $ejemplar = Ejemplar::find($id); 
        if ($ejemplar->delete()) {  
            $ejemplar = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $ejemplar = \Response::json(['error' => 'No se ha podido eliminar la pelicula'], 403);
        }
        
        return $ejemplar;
    }
}
