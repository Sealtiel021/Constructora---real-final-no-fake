<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
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
        <h1>Registro de nuevo proyecto</h1>

        <div class="form-style-2">
            <div class="form-style-2-heading">Ingresa los datos del proyecto</div>
                <form action="" method="post">
                    <label for="folio"><span>Folio <span class="required">*</span></span><input type="text" class="input-field" name="folio" value="" /></label>
                    <label for="nombre"><span>Nombre <span class="required">*</span></span><input type="text" class="input-field" name="nombre" value="" /></label>
                    <label for="descripcion"><span>Descripcion <span class="required">*</span></span><textarea name="descripcion" class="textarea-field"></textarea></label>
                    <label for="costo"><span>Costo total <span class="required">*</span></span><input type="text" class="input-field" name="costo" value="" /></label>
                    <label for="fecha_inicio"><span>Fecha de inicio <span class="required">*</span></span><input type="date" class="input-field" name="fecha_inicio" value="" /></label>
                    <label for="fecha_proyectada"><span>Fecha proyectada <span class="required">*</span></span><input type="date" class="input-field" name="fecha_proyectada" value="" /></label>
                    <label for="fecha_real"><span>Fecha de entrega real <span class="required">*</span></span><input type="date" class="input-field" name="fecha_real" value="" /></label>
                    <label for="ubicacion"><span>Ubicacion<span class="required">*</span></span><input type="text" class="input-field" name="ubicacion" value="" /></label>
                    <label for="estatus"><span>Estatus<span class="required">*</span></span><input type="text" class="input-field" name="estatus" value="" placeholder="Terminado / en proceso" /></label>

                    <label for="tipo_proyecto"><span>Tipo de proyecto<span class="required">*</span></span><select name="field4" class="select-field">
                        <option value="Rehabilitacion">Rehabilitacion</option>
                        <option value="Edificacion">Edificacion</option>
                    </select></label>
                    <label for="origen_recurso"><span>Origen del recurso<span class="required">*</span></span>
                        <input  type="radio" name="origen_recurso" value="publico" />Publico
                        <input  type="radio"  name="origen_recurso" value="privado" />Privado
                        <input  type="radio"  name="origen_recurso" value="ambos" />Ambos
                    <label id="btnEnviar"><span> </span><input type="submit" value="Registrar" /></label>
            </form>
        </div>
    </main>


</body>
</html>
