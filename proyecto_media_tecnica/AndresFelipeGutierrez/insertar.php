<?php

include('db.php');

if (isset($_POST['Registrar'])) {
    $Usuario = $_POST['Usuario'];
    $IDMedico = $_POST['IDMedico'];
    $Clave = $_POST['Clave'];
    $FechaNacimiento = $_POST['fechaNacimiento'];
    echo $Usuario;
    echo $Clave;
    echo $FechaNacimiento;
    $query = "INSERT INTO Medicos 
            VALUES ('$Usuario', '$Clave', '$IDMedico', '$FechaNacimiento')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        $_SESSION['message'] = 'Médico no se registró';
        header('Location: registrar.php');
    }else{
    $_SESSION['message'] = 'Médico registrado con éxito.';
    header('Location: index.php');}

}

?>