<?php 
  include "encabezado.inc.php";
?>
     <div class="formulario">
     <center>
        <form action="inisiarSesion.php" method="get">
            <p>
                <label for="usuario">usuario: </label>
                <input type="text">
            </p>
            <p>
                <label for="password">password: </label>
                <input type="password">
            </p> 
            <p class="boton">
                <input type="submit" value="Enviar">
            </p>
        </form> 
      </center>
      </div>
      
   </div>

<?php 
  include "pie.inc.php";
?>