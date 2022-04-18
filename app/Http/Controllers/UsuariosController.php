<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuario']=Usuarios::paginate(10);
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Nombre'=>'required|string|max:150',
            'ApellidoPaterno'=>'required|string|max:150',
            'ApellidoMaterno'=>'required|string|max:150',
            'Correo'=>'required|email',
            'Password'=>'required|string|max:150'
        ];

        $mensaje=[
            'required'=>':attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosUsuarios = request()->except('_token');
        /*
        ***Usar si se agrega una fotografia***
        if($request->hash_file('Foto')){
            $datosUsuarios['Foto']=$request->file('Foto')->store('uploads','public');
        }
        */
        Usuarios::insert($datosUsuarios);

        //return response()->json($datosUsuarios);
        
        return redirect('usuarios')->with('mensaje','Usuario Agregado Con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios=Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'Nombre'=>'required|string|max:150',
            'ApellidoPaterno'=>'required|string|max:150',
            'ApellidoMaterno'=>'required|string|max:150',
            'Correo'=>'required|email',
            'Password'=>'required|string|max:150'
        ];

        $mensaje=[
            'required'=>':attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);



        $datosUsuarios = request()->except(['_token','_method']);
        Usuarios::where('id','=',$id)->update($datosUsuarios);

        $usuarios=Usuarios::findOrFail($id);
        //return view('usuarios.edit', compact('usuarios'));
        return redirect('usuarios')->with('mensaje','Usuario Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return redirect('usuarios')->with('mensaje','Usuario Eliminado');
    }
}
