<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkDetail;
class WorkDetailController extends Controller
{
  public function index()
{

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
