<?php include "header.php";?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">maneras de mostrar datos con php y mysqli</h1>
      <p class="lead">
          <h4>Mostrar datos com mysqli_ferch_row</h4>
            <p> esta funicon permite converit una consulta mysql a un arreglo de una dimencion.
                porlo tanto podemos obtener el valor de un campo de la consulta por medio de un indice
            la funcion mysqli_fetch_rowllevar parametros una respuesta de una ejeecucion mysql. y un objeto de conexion  </p>

      </p>
      <p>Ejemplo de uso de mysqli_ferch_row</p>
      <p>$sql="SELECT campo1,campo2,campo3 FROM t_tabla;"</p>
      <p>$respuesta = mysqli_query($conexion,sql);</p>
      <p>$datos = mysqli_ferch_row($respuets);</p>
    <p>echo $datos[0];//esto no retorna  la informacion del campo1</p>
    <h3>Ejemplo de loop de datos con mysqli_ferch_row</h3>
    <p>While($datos = mysqli_ferch_row($respuesta){//mientasdatos sea ejecutado continura})</p>
    <hr>
    <h3>Mostar datos  com mysqli_fetch_array</h3>
    <p>
    esta funicon permite converit una consulta mysql a un arreglo asociativo.
                porlo tanto podemos obtener el valor de un campo de la consulta por medio de una llave
            la funcion mysqli_fetch_array llevar parametros una respuesta de una ejeecucion mysql. objeto de conexion 
    </p>
    <h3>Ejemplo  de loop de datos con mysqli_fetch_array</h3>
        <p>
        <p>Ejemplo de uso de mysqli_ferch_row</p>
      <p>$sql="SELECT campo1,campo2,campo3 FROM t_tabla;"</p>
      <p>$respuesta = mysqli_query($conexion,sql);</p>
      <p>$datos = mysqli_ferch_row($respuets);</p>
    <p>echo $datos[0];//esto no retorna  la informacion del campo1</p>
    <h3>Ejemplo de loop de datos con mysqli_ferch_row</h3>
    <p>While($datos = mysqli_ferch_row($respuesta){//mientasdatos sea ejecutado continura})</p>
    <hr>   
        </p>
    </div>
  </div>
</div>
<?php include "footer.php";?>