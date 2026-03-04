<?php
session_start(); 

$conn = mysqli_connect(
  '127.0.0.1', 
  'root',       
  'root',           
  'polideportivo'
) or die ('Error de conexión: ' . mysqli_connect_error());
?>
