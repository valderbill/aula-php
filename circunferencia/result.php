<?php
include('funcoes.php');

/*if (isset($_POST['raio']) && is_numeric($_POST['raio'])) {
*    $raio = $_POST['raio'];
    
  *  $area = calcular_area($raio);
  *  $circunferencia = calcular_circunferencia($raio);
    
  *  echo "<h1>Resultados</h1>";    
  *  echo "<p>Área do círculo: " . number_format($area, 2) . "</p>";
  *  echo "<p>Circunferência do círculo: " . number_format($circunferencia, 2) . "</p>";
    
} 
  */


  $raio = str_replace(",",".", $_POST['raio']);

  echo "<b> Área do circulo:</b>" . round(calcular_area($raio),2) . ".<br />";
  echo "<b>Tamanho da circuferencia:</b>" . round(calcular_circunferencia($raio),2) . ".<br />";

?>
