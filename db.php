<?php
session_start();

$conn = mysqli_connect(
  "baseProyecto:3306",
  "root",
  "",
  "php_mysql_crud"
) or die(mysqli_erro($mysqli));

?>
