<?php include "header.php";?>
<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Conectar a mysql con php</h1>
        <p class="lead">
            <h3>¿cuales son los argumentos o parametros  necesesarios en una coenexion </h3>
            <p>Para poder llevar a cabo la conexion requerimos de solo 4 argumentos </p>
            <ol>
                <li>El servidor web que normalmente es un ip un dominio 
                    o localhost
                </li>
                <li>El servidor usurario de base de datos</li>
                <li>El password del usuario</li>
                <li>El nombre de la bd </li>
            </ol>
        </p>
        <h3>Ejemplo de conexion sensilla utilizando mysQl</h3>
        <p>
            <p>$servidor = "localHost";</p>
            <p>$ususario = "root";</p>
            <p>$password = "";</p>
            <p>$bd = "mibd";</p>
            <p>$conexion = mysql_connect($servidor,$usuario,$passord,$bd)</p>
        </p>
        <p>De esa forma podemos connectar a mysql de una forma corta </p>
    </div>
    </div>
</div>
<?php include "footer.php";?>
