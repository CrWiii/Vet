<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsuarioController extends Controller{
    
    public function inicio(){
        $usuarios = User::paginate(20);
        $CantidadUsuarios = $usuarios->total($usuarios);
        return view('usuarios.listarUsuarios', compact('usuarios','CantidadUsuarios'));
    }

    public function crear(){
        return view('usuarios.crearUsuario');
    }

    public function registrar(Request $request){
        $this->validate($request, [
             'name' => 'required',
             'email' => 'required',
             'apellido_paterno' => 'required',
             'apellido_materno' => 'required',
        ]);

        $user = new User;
        $user->name = strtoupper($request->name);
        $user->email = $request->email;
        $user->apellido_paterno = strtoupper($request->apellido_paterno);
        $user->apellido_materno = strtoupper($request->apellido_materno);
        $user->password = "123321";

        $user->created_by = 1;
        $user->updated_by = 1;
        $user->profile_id = 1;


        $user->state = 1;
        $user->save();

        return redirect('ListarUsuarios')->with('message','Usuario Creado');
    }

    public function mostrar($id){
        
    }

    public function editar($id){
        $user = User::find($id);
        return view('usuarios.editarUsuario', compact('user'));
    }


    public function actualizar(Request $request, $id){
        $this->validate($request, [
             'name' => 'required',
             'email' => 'required',
             'apellido_paterno' => 'required',
             'apellido_materno' => 'required',
        ]);
        $user = User::find($request->id);
        $user->name = strtoupper($request->name);
        $user->email = $request->email;
        $user->apellido_paterno = strtoupper($request->apellido_paterno);
        $user->apellido_materno = strtoupper($request->apellido_materno);
        $user->update();
        return redirect('ListarUsuarios')->with('message','Usuario Modificado');
    }

 
    public function eliminar($id){
        $user = User::find($id);
        $user->delete();
        return redirect('ListarUsuarios')->with('message','Usuario Eliminado');
    }

    public function activar($id){
        $user = User::findOrFail($id);
        $user->state = 1;
        $user->update();
        return redirect('ListaUsuarios');
    }

    public function desactivar($id){
        $user = User::findOrFail($id);
        $user->state = 0;
        $user->update();
        return redirect('ListaUsuarios');
    }
}
