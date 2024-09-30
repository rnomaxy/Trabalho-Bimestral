<?php
$valor = $_GET["idioma"];

setcookie("idioma", $valor, time()+259200);

header("Location:index.php");