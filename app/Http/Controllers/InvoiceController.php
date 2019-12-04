<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoiceController extends Controller
{
  public function index()
{

    $invoices = Invoice::all();


    return view("invoice.invoice" ,compact('invoices')  );

}

public function show($id)
{
    return  Invoice::find($id);
}


public function update(Request $request, $id)
  {
    $task =  Invoice::findOrFail($id);
    $task->update($request->all());
    return $task;
  }

public function delete(Request $request, $id)
  {
    $task =  Invoice::findOrFail($id);
    $task->delete();

    return 204;
  }
    //
}
