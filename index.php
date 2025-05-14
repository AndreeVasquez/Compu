<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Departamentos de Guatemala</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body bgcolor="##BAD062">
	<h1 align="center">Departamentos y Cabeceras de Guatemala </h1>
	<?php
	$departamentos =[ 
            "Guatemala" => "Guatemala",
            "Baja Verapaz" => "Salamá",
            "Alta Verapaz" => "Cobán",
            "Chimaltenango" => "Chimaltenango",
            "Chiquimula" => "Chiquimula",
            "El Progreso" => "Guastatoya",
            "Escuintla" => "Escuintla",
            "Huehuetenango" => "Huehuetenango",
            "Izabal" => "Puerto Barrios",
            "Jalapa" => "Jalapa",
            "Jutiapa" => "Jutiapa",
            "Petén" => "Flores",
            "Quetzaltenango" => "Quetzaltenango",
            "Quiché" => "Santa Cruz del Quiché",
            "Retalhuleu" => "Retalhuleu",
            "Sacatepéquez" => "Antigua Guatemala",
            "San Marcos" => "San Marcos",
            "Santa Rosa" => "Cuilapa",
            "Sololá" => "Sololá",
            "Suchitepéquez" => "Mazatenango",
            "Totonicapán" => "Totonicapán",
            "Zacapa" => "Zacapa"
        ];
	  foreach ($departamentos as $nombre => $cabecera) {
            echo "<li><strong>$nombre:</strong> $cabecera</li>";
        }
	?>
</body>
</html>