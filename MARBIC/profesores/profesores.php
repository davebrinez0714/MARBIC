<?php 

include_once('../Config/Database.php');
class profesores{
public $conn;

function __construct(){
$db = new Database();
$this->conn = $db->__construct();
}
function crear_usuario($datos_usuario){
$nombre = $datos_usuario ['nombre'];
$apellido = $datos_usuario ['apellido'];
$correo_electronico = $datos_usuario ['correo_electronico'];
$telefono = $datos_usuario ['telefono'];
$edad = $datos_usuario ['edad'];
$fecha_de_nacimiento = $datos_usuario ['fecha_de_nacimiento'];
$lugar_de_nacimiento = $datos_usuario ['lugar_de_nacimiento'];
$foto_perfil = $datos_usuario ['foto_perfil'];


$guardar_datos = " INSERT INTO profesores VALUES ( NULL, '$nombre', '$apellido', '$correo_electronico', $telefono, '$edad', '$fecha_de_nacimiento', '$lugar_de_nacimiento', '$foto_perfil' )";
echo $guardar_datos;
return mysqli_query($this->conn, $guardar_datos);


}


}

?>