+<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars(trim($_POST["nombre"]));
  $comentario = htmlspecialchars(trim($_POST["comentario"]));

  if (!empty($nombre) && !empty($comentario)) {
    $fecha = date("d/m/Y H:i");
    $entrada = "[$fecha] $nombre: $comentario\n";

    file_put_contents("comentarios.txt", $entrada, FILE_APPEND);
  }
}
header("Location: comentarios.php"); // redirige después de guardar
exit();
?>
