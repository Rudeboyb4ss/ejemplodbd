<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Obtener todos los datos de una tabla (get)
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }


    //Crear una nueva tupla (post)
    public function store(Request $request)
    {
        //

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json([
            "message"=> "Se ha creado un usuario.",
            "id"=> $user->id
        ],202);
    }
    //Obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        //
        $user = User::find($id);
        return response()->json($user);
    }

    //Modificar una tupla específica (put)
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        if($request->name != NULL){
            $user->name = $request->name;
        }
        if($request->email != NULL){
            $user->email = $request->email;
        }
        
        $user->save();
        return response()->json($user);
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        //
        $user = User::find($id);
        if($user != NULL){
            $user->delete();
        }
        return response()->json([
            "message"=>"Se ha borrado el usuario",
            "id"=>$id
        ]);
    }

}
