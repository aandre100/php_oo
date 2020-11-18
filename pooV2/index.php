<?php
require("Usuario.php");

$user = new Usuario("André Cardoso", "andre@spzn.pt");
echo json_encode($user);
