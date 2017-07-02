<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());
        if (!isset($usuario)) { 
            $datos = [
            'errors' => true,
            'msg' => 'Error al crear al usuario',];
            $usuario = \Response::json($datos, 404);
        }         
        // se retorna a la ruta 
        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if (!isset($usuario)) {
            $datos = [
            'errors' => true,
            'msg' => 'No se encontró al usuario = ' . $id,];
            $usuario = \Response::json($datos, 404);
        }
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuarioRetorno = $usuario->save();
        if (isset($usuario)) {
            $usuario = \Response::json($usuarioRetorno, 200);
        } else {
           $usuario = \Response::json(['error' => 'No se ha actualizado el usuario, intentelo nuevamente'], 404);
        }
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario->delete()) {
            $usuario = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
           $usuario = \Response::json(['error' => 'No se ha podido eliminar al usuario'], 403);
        }
        return $usuario;
    }
}
