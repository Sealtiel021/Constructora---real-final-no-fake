<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkDetail;
use App\Http\Requests\DetailRequest;
class WorkDetailController extends Controller
{
  public function index()
{

  $details = WorkDetail::all();

  return view("detail.detalles",compact('details'));

}
public function update(Request $request)
{
  $detail =WorkDetail::find( $request->input('id'));
  $detail->date =$request->input('fecha_inicio');
  $detail->image =$request->input('imagen');
  $detail->state =$request->input('estatus');
  $detail->save();
  $details = WorkDetail::all();
  return view("detail.detalles",compact('details'));

}
public function edit($id)
{
    $detail =WorkDetail::find($id);
    return view("detail.editarDetalles",compact('detail'));
}


public function show($id)
{
    return  WorkDetail::find($id);
}


public function store(Request $request)
{

      return  WorkDetail::create( ['name' => $request->input('name'),
                                'url' => $path  ]  );
}



public function delete(Request $request, $id)
  {
    $task =  WorkDetail::findOrFail($id);
    $task->delete();

    return 204;
  }
    //
}
