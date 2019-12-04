<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\WorkDetail;
class WorkController extends Controller
{
  public function index()
{
  $details = Work::all();

  return view("history.historial",compact('details'));

}

public function show($id)
{

    $detail = Work::find($id);
    return view('history.verHistoria',compact('detail'));

}

public function store(Request $request)
{

      $workDetail =  WorkDetail::create( [
                                      'date' => $request->input('fecha_inicio'),
                                      'image' =>"x",
                                      'state' => $request->input('estatus')
                                    ]  );

      return  Work::create( [  'name' => $request->input('nombre'),
        'state' => $request->input('estatus'),
        'description' => $request->input('descripcion'),
        'dateStart' => $request->input('fecha_inicio'),
        'dateReal' => $request->input('fecha_real'),
        'dateProjected' => $request->input('fecha_proyectada'),
        'type' => $request->input('field4'),
        'resourceOrigin' => $request->input('origen_recurso'),
        'totalCost' => $request->input('costo'),
        'publicPorcent' => 0,
        'privatePorcent' => 0,
        'locate' => $request->input('ubicacion'),
        'lat' => "",
        'lng' => "",
        'work_detail_id' =>   $workDetail->id ]  );

}

public function update(Request $request, $id)
  {
    $task =  Work::findOrFail($id);
    $task->update($request->all());
    return $task;
  }

public function delete(Request $request, $id)
  {
    $task =  Work::findOrFail($id);
    $task->delete();

    return 204;
  }
    //
    public function work_report($tipo_obra){
      $reporte ;
      switch ($tipo_obra) {
        case 'privado':
            $reporte =   Work::where('resourceOrigin','=',$tipo_obra)->get();
          break;
          case 'publico':
              $reporte =   Work::where('resourceOrigin','=',$tipo_obra)->get();
            break;
            case 'ambos':
                $reporte =   Work::where('resourceOrigin','=',$tipo_obra)->get();
              break;
        default:
          return 404;
          break;
      }


      return $reporte;
      #$titulo = "Obras";

      #return view("registry.registro" ,compact('registros','titulo')  );
    }
    public function history()
  {

    $registros = Work::all();
    $titulo = "Obras";
    return view("history.historial" ,compact('registros','titulo')  );
  }
  public function showProfile()
{


  return view("history.historial");
}
public function showDetail()
{

return view("detail.detalles");
}
public function showRegister()
{


return view("registry.registro");
}
public function showReports()
{


return view("reports.reportes");
}
public function showIn()
{


return view("index.index");
}
}
