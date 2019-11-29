<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
class WorkController extends Controller
{
  public function index()
{

    $registros = Work::all();
    $titulo = "Obras";

    return view("registry.registro" ,compact('registros','titulo')  );

}

public function show($id)
{

    return  Work::find($id);

}

public function store(Request $request)
{

      return  Work::create( ['name' => $request->input('name'),
                                'url' => $path  ]  );
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
