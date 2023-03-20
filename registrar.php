<?php include("bd.php");

if(isset($_POST['register'])){
    if(strlen($_POST['nombre']) >= 1 &&  strlen($_POST['usuario']) >= 1 &&
    strlen($_POST['cargo']) >= 1 && strlen($_POST['empleados']) >= 1 &&
    strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1){
        $nombre=trim($_POST['nombre']);
        $usuario=trim($_POST['usuario']);
        $cargo=trim($_POST['cargo']);
        $empleados=trim($_POST['empleados']);
        $correo=trim($_POST['correo']);
        $telefono=trim($_POST['telefono']);
        $fechareg=date("d/m/y");
        $consulta = "INSERT INTO formulario(nombre, nombreEmpresa, cargo, numeroEmpleados, correoElectronico, telefono,fechaRegistro)
         VALUES ('$nombre','$usuario','$cargo','$empleados','$correo','$telefono','$fechareg')";
        $resultado= mysqli_query($conex,$consulta);
    }
}


?>
