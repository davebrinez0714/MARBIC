<?php 

include_once('../Config/Database.php');
class Usuarios{
public $conn;

function construct(){
$db = new Database();
$this->conn = $db->__construct();
}
function crear_usuario($datos_usuario){
$nombre = $datos_usuario ['nombre'];
$apellido = $datos_usuario ['apellido'];
$correo_electronico = $datos_usuario ['correo_electronico'];
$contrasena = $datos_usuario ['contrasena'];
$celular = $datos_usuario ['celular'];
$rol = $datos_usuario ['rol'];

$guardar_datos = " INSERT INTO  ususarios VALUES ( NULL, '$nombre', '$apellido', '$correo_electronico', '$contrasena', $celular, '$rol' )";
echo $guardar_datos;
return mysqli_query($this->conn, $guardar_datos);


}

function Ver_usuarios(){
    $ver_usuarios = " SELECT * FROM usuarios";
    return mysqli_query($this->conn, $ver_usuarios);
}
}

?>
