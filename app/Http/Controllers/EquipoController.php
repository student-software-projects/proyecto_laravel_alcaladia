<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use App\Models\Localidad;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public  function index(){
        $equipo=Equipo::all();
        $localidad=Localidad::all();
        return view('equipo.index',compact('equipo'),compact('localidad'));
    }
    public function create()
    {

        return view('equipo.create');
    }

    public function store(request $request)
    {
        $equipo=Equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Equipo creado con exito'
        ]);
    }

    public function show($id)
    {
        $equipo=Equipo::find($id);
        return view('equipo.show',compact('equipo'));
    }

    public function destroy($id)
    {
        $equipo=Equipo::find($id)->delete();
        return redirect()->route('equipo.index')->with([
            'mesa'=>'Equipo eliminado con exito'
        ]);
    }
    public function edit($id)
    {
        $equipo=Equipo::find($id);
        return view('equipo.edit',compact('equipo'));
    }
    public  function update(request $request,$id)
    {
        $equipo=Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.show',$id)->with([
            'mesa2'=>'Equipo actualizado con exito'
        ]);
    }
}



