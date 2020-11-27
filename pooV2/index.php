<?php
require("Nota.php");

$nota = new Nota();
$nota->setNota("André Cardoso", "Português", 10, 4);
echo $nota->getNota();
;
?>
