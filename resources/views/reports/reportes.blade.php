<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes</title>
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
        <h1>Generacion de reportes</h1>

        <div class="form-style-2">
            <div class="form-style-2-heading">Selecciona el tipo de reporte </div>
                <form action="" method="post">

                    <label for="tipo_proyecto"><span>Tipo de reporte<span class="required">*</span></span><select name="field4" class="select-field">
                        <option value="Obras en proceso">Obras en proceso</option>
                        <option value="Obras con retraso">Obras con retraso</option>
                        <option value="Segun origen">Segun origen</option>
                        <option value="Por detalle">Por detalle</option>
                        <option value="Por factura">Por factura</option>
                    </select></label>

                    <label id="btnEnviar"><span> </span><input type="submit" value="Generar reporte" /></label>
            </form>
        </div>
    </main>

</body>
</html>
