<?php 
include './templates/header.php';
require './app/app.php';

$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $symptoms = $_POST['symptoms'];

    if(!empty($name) || !empty($lastName) || !empty($age) || !empty($symptoms)){
        addPatient($name, $lastName, $age, $symptoms);
        // Redirigir a home.php
        header('Location: home.php');
        exit;
    }else{
        $showAlert = true;
    }
}
?>

<div class="">
        <h2 class="font-bold text-3xl">Agrega un paciente</h2>
        <section class="w-full mt-10 rounded-xl bg-white shadow-xl px-10 py-10">
            <?php if($showAlert): ?>
                <h4 class="mb-10 w-full font-bold text-lg text-center p-2 rounded-lg text-red-600 bg-red-100">Todos los campos son abligatorios</h4>
            <?php endif; ?>
            <form method="post">
                <div class="rounded-xl px-3 py-1.5 w-full bg-[#090D14] text-white">
                    <label for="name" class="text-xs opacity-50">Nombre</label>
                    <input id="name" name="name" type="text" value="" class="p-1 border-none bg-transparent border-transparent w-full focus:outline-none">
                </div>
                <div class="rounded-xl px-3 py-1.5 w-full bg-[#090D14] text-white mt-5">
                    <label for="lastName" class="text-xs opacity-50">Apellido</label>
                    <input id="lastName" name="lastName" type="text" value="" class="p-1 border-none bg-transparent border-transparent w-full focus:outline-none">
                </div>
                <div class="rounded-xl px-3 py-1.5 w-full bg-[#090D14] text-white mt-5">
                    <label for="age" class="text-xs opacity-50">Edad</label>
                    <input id="age" name="age" type="number" value="" class="p-1 border-none bg-transparent border-transparent w-full focus:outline-none">
                </div>
                <div class="rounded-xl px-3 py-1.5 w-full bg-[#090D14] text-white mt-5">
                    <label for="symptoms" class="text-xs opacity-50">Sintomas</label>
                    <textarea name="symptoms" id="symptoms"  class="p-1 border-none bg-transparent border-transparent w-full focus:outline-none resize-none w-full h-20"></textarea>
                </div>
                <button type="submit" class="inline-block mt-7 px-14 py-3 font-bold text-center text-white uppercase align-middle bg-transparent border-0 rounded-xl cursor-pointer shadow text-xs bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-[1.02] transition-all duration-300  active:opacity-50">Agregar paciente</button>
            </form>
        </section>
    </div>
<?php include './templates/footer.php'; ?>
