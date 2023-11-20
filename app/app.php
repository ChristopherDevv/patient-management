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
            "id" => uniqid(),
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

    function updatePatient($id, $patient)
    {
        $patients = showPatients();
        foreach($patients as $index => $actualPatient){
            if($actualPatient['id'] === $id){
                $patients[$index] = $patient;
                break;
            }
        }

        // Actualizar el array de pacientes en la sesión
        $_SESSION['patients'] = $patients;
        //$_SESSION['success_update'] = "Paciente actualizado con exito!!";
        header('Location: home.php?response_alert=2');
        exit;
    }

    function destroyPatient($id) {
        $patients = showPatients();
        foreach($patients as $index => $actualPatient){
            if($actualPatient['id'] === $id){
                unset($patients[$index]);
                break;
            }
        }

        $_SESSION['patients'] = $patients;
        header('Location: home.php?response_alert=3');
        exit;
    }

    function destroySession()
    {
        unset($_SESSION['patients']);
        session_destroy();
    }

?>