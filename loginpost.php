<html>
  <head>
  
  
  </head>
  <body>
    <h1>Tarea 4: Login</h1>
<a href="Tarea_4.php"><h4>Regresar al Principio</h4></a>
<?php
   
    $Codigo = $_POST['txtCodigo'];
    $Password = $_POST['txtPassword'];
   
   

if($Codigo == 100 and $Password == "udg"){

echo "<h1>Bienvenido al Sistema de Administracion;n</ h1>";
}else{

        echo "<h1>Erroro en Usuario o Password</h1></br>";
        echo "<h3>!!!Sigue Participando!!!</h3></br>";


}
?>
    
</body>

</html