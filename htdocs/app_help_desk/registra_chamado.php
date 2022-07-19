<?php

  session_start();
  
  $arquivo = fopen('../../app_helpDesk/arquivo.hd', 'a');

  $array = array('id' => $_SESSION['id']);

  $array = array_merge($array, $_POST);

  $texto = implode('#', $array);

  $texto = $texto . PHP_EOL;

  fwrite($arquivo, $texto);

  fclose($arquivo);

  header('Location: abrir_chamado.php');
?>