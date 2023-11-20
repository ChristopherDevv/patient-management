<?php
    session_start();

    function showPatients() 
    {
        // Devolver los pacientes de la sesión, o un array vacío si no hay pacientes
        return isset($_SESSION['patients']) ? $_SESSION['patients'] : [];
    }

    function addPatient($name, $lastName, $age, $symptoms)
    {
        // Crear un array para el nuevo paciente
        $newPatient = [
            "name" => $name,
            "last_name" => $lastName,
            "age" => $age,
            "symptoms" => $symptoms
        ];
        // Si no existe un array de pacientes en la sesión, crear uno
        if(!isset($_SESSION['patients'])){
            $_SESSION['patients'] = [];
        }

        // Agregar el nuevo paciente al array de pacientes en la sesión
        $_SESSION['patients'][] = $newPatient;
 
    }

?>