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
          <thead>


            <tr>
                <th>ID</th>
                <th>name</th>

                <th>Estatus</th>
                  <th>description</th>
                <th colspan="1">&nbsp;</th>
            </tr>
              </thead>
              <tbody>
                @foreach($details as $detail)
                  <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->name }}</td>
                      <td>{{ $detail->state }}</td>
                      <td>{{ $detail->description }}</td>
                      <td>
                <a href="{{route('history' , ['id' => $detail->id] ) }}">Ver</a>
                      </td>

                  </tr>

                @endforeach
              </tbody>

        </table>



    </main>

</body>
</html>
