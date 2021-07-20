<?php include "header.php";?>

<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
        <h1 class="font-weight-light">Isertar datos con php a mysql a mysqli</h1>
        <p class="lead">Para poder  insertar datos desde php con mysqli, slo necesitamos crear la cadena de sql valida y 
            ejecutarla con una conexion calida, los parametros a ser insertados , deben ir en variable como 
            convencion, no necesitamos mas que saber la respues de mysqli_query para saber si se llevo con exito 
            la insercion 
            
        </p>
        <h3>Ejemplo de como insertar con php a mysql</h3>
        <p>$sql"INSERT INTO t_tabla(campo,campo2)VALUES ('$varable','$varable2')";</p>
        <p>$respueta = mysql_query($conexion,$sql);</p>
        <p>las varables $respuesta nos retorna un 1 on un 0 siejecuta ono asi sabremos si </p>
    </div>
    </div>
</div>
<?php include "footer.php";?>