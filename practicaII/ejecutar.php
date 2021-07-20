<?php include "header.php";?>

<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
        <h1 class="font-weight-light">Ejecucion de un query con mysqli</h1>
        <p class="lead">
            <p>para poder ejecutar un query de php  al servosdor de base de base de datos
                mysql o mariadb
                con mysql,requerimos utilizar  la funcion mysqli_query esta ya viene en el API 
                nativo de php en su vercion 5, esta funcion de dos parametros para poder ejecutar correctamente
                como son;

            </p>
            <ol>
                <li>conexion al servidor</li>
                <li>cadena de sql valida</li>
            </ol>
            <h3>Ejemplo de uso de mysqli_query</h3>
            <p>$sql = "SELECT campo ,campo2* FROM t_tabla;" </p>
            <p>$respuesta = mysql_query($conexion,$sql)</p>
            <p>
                siendo $sql la variable que contine la cadena que forma un sql valido,$respuesta 
                obtine un 0 o un 1 dependiendo  se mysqli_query se ejecuto coerrectamente la varable de $conexion
                esta expuesta <a href="conexion.php">aqui</a>

            </p>
            <p>
                entiedase que cualquier  cadena sql que se 
            </p>

        </p>
    </div>
    </div>
</div>
<?php include "footer.php";?>