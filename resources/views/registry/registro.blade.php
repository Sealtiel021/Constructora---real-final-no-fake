<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style type="text/css">

    header img {
        height: 40px;
        margin-left: 40px;
    }

    body {
        height: 125vh;
        background-image: url('https://cdn.pixabay.com/photo/2016/11/24/20/30/architecture-1857175_960_720.jpg');
        background-size: cover;
        font-family: sans-serif;
        margin-top: 80px;
        padding: 30px;
    }

    header{
        background-color: white;
        position: fixed;
        top: 0;
        left:0;
        right:0;
        height: 80px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 25px 0 black;
        justify-content: space-around;
    }

    header * {
        display: inline;
    }


    header li {
        margin: 5px;
        text-decoration: none;
        border-right: 2px solid rgb(241, 161, 11);
        padding-right: 15px;

    }

    header li a {
        color: rgb(49, 49, 49);
    }

    a:hover{
        color: rgb(241, 161, 11);
    }

    .Logo{
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .Logo h1 {
        padding: 6px;
        font-size: 1.3em;
        margin-left: 7px;
        color: rgb(58, 58, 58);
        font-family: 'Calistoga';
        border-left: 1px solid black;
    }


    main {
      background-color: white;
      width: 100vh;
      display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;

    }


    h1{
        color: rgb(241, 161, 11);
        font-family: 'Bebas Neue';
        padding: 20px 12px 10px 20px;
    }


    .form-style-2{
      max-width: 500px;
      padding: 20px 12px 10px 20px;
      font: 13px Arial, Helvetica, sans-serif;
    }
    .form-style-2-heading{
      font-weight: bold;
      font-style: italic;
      border-bottom: 2px solid #ddd;
      margin-bottom: 20px;
      font-size: 15px;
        padding-bottom: 3px;
        color: rgb(58, 58, 58);
    }
    .form-style-2 label{
      display: block;
      margin: 0px 0px 15px 0px;
    }
    .form-style-2 label > span{
      width: 100px;
      font-weight: bold;
      float: left;
      padding-top: 8px;
      padding-right: 5px;
    }
    .form-style-2 span.required{
      color:red;
    }

    .form-style-2 input.input-field, .form-style-2 .select-field{
      width: 48%;
    }
    .form-style-2 input.input-field,
    .form-style-2 .textarea-field,
     .form-style-2 .select-field{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      border: 1px solid #C2C2C2;
      box-shadow: 1px 1px 4px #EBEBEB;
      -moz-box-shadow: 1px 1px 4px #EBEBEB;
      -webkit-box-shadow: 1px 1px 4px #EBEBEB;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      padding: 7px;
      outline: none;
    }
    .form-style-2 .input-field:focus,
    .form-style-2 .textarea-field:focus,
    .form-style-2 .select-field:focus{
      border: 1px solid #0C0;
    }
    .form-style-2 .textarea-field{
      height:100px;
      width: 55%;
    }
    .form-style-2 input[type=submit],
    .form-style-2 input[type=button]{
      border: none;
      padding: 8px 15px 8px 15px;
      background: #FF8500;
      color: #fff;
      box-shadow: 1px 1px 4px #DADADA;
      -moz-box-shadow: 1px 1px 4px #DADADA;
      -webkit-box-shadow: 1px 1px 4px #DADADA;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
    }
    .form-style-2 input[type=submit]:hover,
    .form-style-2 input[type=button]:hover{
      background: #EA7B00;
      color: #fff;
    }

    #btnEnviar {
      margin: 10%;
    }

    input[type=submit] {
      border: none;
      padding: 8px 15px 8px 15px;
      background: #FF8500;
      color: #fff;
      box-shadow: 1px 1px 4px #DADADA;
      -moz-box-shadow: 1px 1px 4px #DADADA;
      -webkit-box-shadow: 1px 1px 4px #DADADA;
      border-radius: 3px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
    }

    input[type=submit]:hover{
      background: #EA7B00;
      color: #fff;
    }

    .search-container button {
      padding: 6px 10px;
      margin-top: 8px;
      background: rgb(241, 161, 11);
      font-size: 17px;
      border: none;
      cursor: pointer;
      border-radius: 3px;
      }

      .search-container button:hover {
      background: #EA7B00;
      }

      table {
      font-family: 'Bebas Neue';
      border-collapse: collapse;
      width: 100%;
      }

      td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      }

      tr:nth-child(even) {
      background-color: #dddddd;
      }



 </style>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
      <div class="Logo">
          <img src="https://img.icons8.com/color/48/000000/worker-female.png">
          <h1>La inquebrantable</h1>
      </div>
      <nav >
          <ul>
            <li><a href="">Login</a></li>
            <li><a href="{{route('reg')}}">Registro</a></li>
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
