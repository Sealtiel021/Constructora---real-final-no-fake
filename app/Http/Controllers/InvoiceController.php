<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  public function index()
{

    $detalle = WorkDetail::all();
    $titulo = "Detalles";

    return view("detail.detalles" ,compact('detalle','titulo')  );

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

public function update(Request $request, $id)
  {
    $task =  WorkDetail::findOrFail($id);
    $task->update($request->all());
    return $task;
  }

public function delete(Request $request, $id)
  {
    $task =  WorkDetail::findOrFail($id);
    $task->delete();

    return 204;
  }
    //
}
