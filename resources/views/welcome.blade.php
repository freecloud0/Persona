<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buscar en tiempo real con jQuery y Bootstrap</title>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<!-- Optional theme -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script>    

  </head>
  <body>
  	<div class="container">
	    <h1>Disco: Dash Berlin - The New Daylight</h1>

      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa la canción de este Disco que deseas Buscar...">
      </div>

	    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nº</th>
            <th>Canción</th>
            <th>+ (Array)</th>            
            <th>Reproducir</th>
          </tr>
        </thead>
        <tbody class="buscar">
          <tr>
              <td>1UuaX3kHs5iKD1mFFsArHq</td>
              <td>1</td>
              <td>Till The Sky Falls Down - Vocal Mix</td>
              <td><a target="_blank" alt="Till The Sky Falls Down - Vocal Mix" title="Till The Sky Falls Down - Vocal Mix" href=https://api.spotify.com/v1/tracks/1UuaX3kHs5iKD1mFFsArHq >Ver Detalles</a></td>
              <td><a target="_blank" alt="Till The Sky Falls Down - Vocal Mix" title="Till The Sky Falls Down - Vocal Mix" href=https://open.spotify.com/track/1UuaX3kHs5iKD1mFFsArHq >Reproducir</a></td>
        </tr>
        <tr>
            <td>4f0dhdt7rjOgUEv7HmF4rM</td>
            <td>2</td>
            <td>Man On The Run - Original Vocal Mix</td>
            <td><a target="_blank" alt="Man On The Run - Original Vocal Mix" title="Man On The Run - Original Vocal Mix" href=https://api.spotify.com/v1/tracks/4f0dhdt7rjOgUEv7HmF4rM >Ver Detalles</a></td>
            <td><a target="_blank" alt="Man On The Run - Original Vocal Mix" title="Man On The Run - Original Vocal Mix" href=https://open.spotify.com/track/4f0dhdt7rjOgUEv7HmF4rM >Reproducir</a></td>
        </tr>
        <tr>
            <td>4U2zGQMK5L3mRuoGZA4WDy</td>
            <td>3</td>
            <td>Wired</td>
            <td><a target="_blank" alt="Wired" title="Wired" href=https://api.spotify.com/v1/tracks/4U2zGQMK5L3mRuoGZA4WDy >Ver Detalles</a></td>
            <td><a target="_blank" alt="Wired" title="Wired" href=https://open.spotify.com/track/4U2zGQMK5L3mRuoGZA4WDy >Reproducir</a></td>
        </tr>
    </tbody>
      </table>

    </div>
  </body>
</html>