<?php
require_once __DIR__ . '/../scripts/database.php';


//Definire il content type
header('Content-Type: application/json');

//Conversione dati in Json
echo json_encode($database);

?>