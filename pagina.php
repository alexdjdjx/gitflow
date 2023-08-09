<!DOCTYPE html>
<html>
<head>
  <title>Counters</title>
  <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <div class="overlay">
        
    </div>
<?php
  $id = $_GET['id']; // Obtén el ID desde la URL
  // Resto de tu código de obtención de datos y presentación
  echo '<header class="header"><p>Counters de '. $id.'</p></header>';

  $mysqli = new mysqli("localhost", "root", "root", "pokemon");

  // Verifica si hay un error en la conexión
  if ($mysqli->connect_error) {
      die("Error de conexión: " . $mysqli->connect_error);
  }?>




    <div class="contenedor-todo">


       
        <?php
       
  $query = "SELECT * from strengths WHERE tipo = '$id'";
  $result = $mysqli->query($query);

  if ($result->num_rows > 0) {
    echo '<h2 class="texto-grande">Fuerte Contra:</h2>';
    echo '<div class="fortalezas">';
    while ($row = $result->fetch_assoc()) {
        $tipo = $row['fuerte_contra'];
        $clase = substr($tipo,0,2);
        echo '<div class="botones' .' ' . $clase .'" >' . $tipo . '</p></div>';
    }

    echo '</div>';
}


 
  ?>
       


       
       <?php
       
       $query = "SELECT * from weaknesses WHERE tipo = '$id'";
       $result = $mysqli->query($query);
     
       if ($result->num_rows > 0) {
         echo '<h2 class="texto-grande">Debil Contra:</h2>';
         echo '<div class="debilidades">';
         while ($row = $result->fetch_assoc()) {
             $tipo = $row['debil_contra'];
             $clase = substr($tipo,0,2);
             echo '<div class="botones' .' ' . $clase .'" >' . $tipo . '</p></div>';
         }
         echo '</div>';
     }
     
     
   
       ?>


        <?php
       
       $query = "SELECT * from inmune WHERE tipo = '$id'";
       $result = $mysqli->query($query);
     
       if ($result->num_rows > 0) {
         echo '<h2 class="texto-grande">Inmune a:</h2>';
         echo '<div class="debilidades">';
         while ($row = $result->fetch_assoc()) {
             $tipo = $row['inmune_a'];
             $clase = substr($tipo,0,2);
             echo '<div class="botones' .' ' . $clase .'" >' . $tipo . '</p></div>';
         }
         echo '</div>';
     }
     
     
  
       ?>
       </div>
    </div>
    <footer class="footer"><p>Counters de <?php echo $id?></p></footer>
</body>
</html>
