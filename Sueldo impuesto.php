
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    
    <form name="Sueldo impuesto.php" method="get" action="Sueldo impuesto.html">
    <div class="p-3 mb-2 bg-success text-white"><Center><h2>Programa de impuesto de 5%</h2></Center></div>
    <h2>
        <center>
            
<?php 




function SueldoI()
{

$ID = $_REQUEST['ID'];
$Nombre = $_REQUEST['N'];
$Apellido = $_REQUEST['A'];
$Sexo = $_REQUEST['Sx'];
$Cargo = $_REQUEST['C'];
$Sueldo = $_REQUEST['S'];

$Lectura = fopen('Sueldo impuesto.txt', 'a') or die("Error al intentar leer el archivo");

fwrite($Lectura, "\n");
fwrite($Lectura, "ID: ". $ID);
fwrite($Lectura, "\n");
fwrite($Lectura, "Nombre: ". $Nombre);
fwrite($Lectura, "\n");
fwrite($Lectura, "Apellido: ". $Apellido);
fwrite($Lectura, "\n");
fwrite($Lectura, "Sexo: ". $Sexo);
fwrite($Lectura, "\n");
fwrite($Lectura, "Cargo: ". $Cargo);
fwrite($Lectura, "\n");
fwrite($Lectura, "Sueldo: ". $Sueldo);
fwrite($Lectura, "\n");


if($Sueldo >= 15000){

    $Impuesto=$Sueldo*0.05;
    
   
    fwrite($Lectura,"Impuesto: ".$Impuesto);
  
}
else{
    $Impuesto = 0;
    fwrite($Lectura,"Impuesto: ".$Impuesto);
   
}
fclose($Lectura);
$Lectura = fopen('Sueldo impuesto.txt', 'r') or die("Error al intentar leer el archivo");
while(!feof($Lectura)){

    $Obtener = fgets($Lectura);
    $Filas= nl2br($Obtener);
    echo "$Filas";
}

fclose($Lectura);

}

SueldoI();
?>
<br><br>
  <center>  <button type="submit" class="btn btn-outline-secondary" action="Opuestop.php" style="width: 400px;" >Volver</button></center>