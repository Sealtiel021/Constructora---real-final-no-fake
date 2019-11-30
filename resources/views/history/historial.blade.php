<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../public/css/app.css">
    <script src="../public/js/app.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <div class="Logo">
            <img src="https://img.icons8.com/color/48/000000/worker-female.png">
            <h1>La inquebrantable</h1>
        </div>
        <nav >
            <ul>
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Registro usuarios</a></li>    
              <li><a href="{{route('reg')}}">Registro obras</a></li>
              <li><a href="{{route('histo')}}">Historial</a></li>
              <li><a href="{{route('deta')}}">Detalles</a></li>
              <li><a href="{{route('rep')}}">Reportes</a></li>
              <li><a href="{{route('prod')}}">Productos</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Historial</h1>


        <div class="search-container">
            <form class="form-style-2" action="">
                <input class="input-field" type="text" placeholder="Buscar obra.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <table>
            <tr>
                <th>Nombre (Job title)</th>
                <th>Edad</th>
                <th>Apodo</th>
                <th>Empleado</th>
            </tr>
            <tr>
                <td> Alejandro Tinoco Duarte   </td>
                <td>  35  </td>
                <td>  El Alejo  </td>
                <td>  Yes  </td>
            </tr>
            <tr>
                <td>  Pedro Ramirez Ortiz  </td>
                <td>  49  </td>
                <td>  El Ortiz  </td>
                <td>  No  </td>
            </tr>
        </table>



    </main>

</body>
</html>
