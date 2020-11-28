<?php

namespace App\Http\Controllers;
use App\Models\localidad;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
       $localidades=Localidad::all();
       return view('localidad.index',compact('localidades'));

    }
    public function create()
    {

        return view('localidad.create');
    }

    public function store(request $request)
    {
      $localidad=Localidad::create($request->all());
      return redirect()->route('localidad.index')->with([
          'message'=>'Localidad creada con exito'
      ]);
    }

    public function show($id)
    {
        $localidad=Localidad::find($id);
        return view('localidad.show',compact('localidad'));
    }

    public function destroy($id)
    {
     $localidad=Localidad::find($id)->delete();
     return redirect()->route('localidad.index')->with([
         'mesa'=>'Localidad eliminada con exito'
     ]);
    }
    public function edit($id)
    {
        $localidad=Localidad::find($id);
        return view('localidad.edit',compact('localidad'));
    }
    public  function update(request $request,$id)
    {
        $localidad=Localidad::find($id)->update($request->all());
        return redirect()->route('localidad.show',$id)->with([
            'mesa2'=>'Localidad actualizada con exito'
        ]);
    }
}



