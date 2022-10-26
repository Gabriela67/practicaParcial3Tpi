
<?php



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad =  $_POST['edad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contra = $_POST['contra'];






$arr_clientes = array('nombre'=> $nombre, 'apellido'=> $apellido, 'edad'=> $edad,
        'telefono'=> $telefono , 'email'=> $email, 'contra'=> $contra);


//Creamos el JSON
$json_string = json_encode($arr_clientes);
$file = 'clientes.json';
file_put_contents($file, $json_string);



//Leemos el JSON
$datos_clientes = file_get_contents("clientes.json");
$json_clientes = json_decode($datos_clientes, true);

foreach ($json_clientes as $cliente) {
    
    echo $cliente."<br>";
}

?>