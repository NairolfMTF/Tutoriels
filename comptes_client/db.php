<?php

$db = new PDO("mysql:dbname=NOM_DE_LA_BASE_DE_DONÉE;host=localhost;", "NOM_UTILISATEUR", 'MOT_DE_PASSE');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>
