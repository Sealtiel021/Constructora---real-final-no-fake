<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
  {

      $productos = Product::all();
      $titulo = "Productos";

      return view("index.index" ,compact('productos','titulo')  );

  }

  public function show($id)
  {
      return  Product::find($id);
  }

  public function store(Request $request)
  {

        return  Product::create( ['name' => $request->input('name'),
                                  'url' => $path  ]  );
  }

  public function update(Request $request, $id)
    {
      $task =  Product::findOrFail($id);
      $task->update($request->all());
      return $task;
    }

  public function delete(Request $request, $id)
    {
      $task =  Product::findOrFail($id);
      $task->delete();

      return 204;
    }

  public function reporte_factura(){

  }
  public function showProducts()
  {


  return view("product.products");
  }
}
