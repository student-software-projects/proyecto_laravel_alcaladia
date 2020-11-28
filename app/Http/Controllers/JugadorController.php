<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public  function index(){
        $Jugador=Jugador::all();
        $equipo=Equipo::all();
        return view('jugador.index',compact('Jugador'),compact('equipo'));
    }
    public function create()
    {

        return view('jugador.create');
    }

    public function store(request $request)
    {
        $Jugador=Jugador::create($request->all());
        return redirect()->route('jugador.index')->with([
            'message'=>'Jugador creado con exito'
        ]);
    }

    public function show($id)
    {
        $Jugador=Jugador::find($id);
        return view('jugador.show',compact('Jugador'));
    }

    public function destroy($id)
    {
        $Jugador=Jugador::find($id)->delete();
        return redirect()->route('jugador.index')->with([
            'mesa'=>'Jugador eliminado con exito'
        ]);
    }
    public function edit($id)
    {
        $Jugador=Jugador::find($id);
        return view('jugador.edit',compact('Jugador'));
    }
    public  function update(request $request,$id)
    {
        $Jugador=Jugador::find($id)->update($request->all());
        return redirect()->route('jugador.show',$id)->with([
            'mesa2'=>'Jugador actualizado con exito'
        ]);
    }
}


