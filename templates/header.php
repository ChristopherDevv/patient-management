<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-gray-600">
    <div id="navToggle" class="fixed bottom-10 right-5 z-30 lg:hidden">
        <button class="w-12 h-12 border rounded-full bg-white shadow-lg flex items-center justify-center">
            <img class="w-7 h-auto" src="https://img.icons8.com/fluency/48/menu--v2.png" alt="menu--v2"/>
        </button>
    </div>
    <header id="navegation" class="fixed z-20 h-screen hidden w-full md:w-[300px] bg-slate-200 bg-opacity-70 backdrop-filter backdrop-blur-sm py-10 px-8 lg:flex items-center justify-start flex-col">
        <div class="w-20 h-20 rounded-full flex items-center justify-center bg-white shadow-lg">
            <img class="w-14 h-auto" src="https://img.icons8.com/ultraviolet/80/caduceus.png" alt="caduceus"/>
        </div>
        <h1 class="text-center font-bold text-xl mt-5"><span class="text-blue-400">Sistema</span> de Gestión de Pacientes</h1>
        <div class="flex items-center justify-center flex-col gap-5 mt-16">
            <a href="/home.php" class="text-center text-xs font-bold bg-white w-full py-2 px-12 rounded-lg shadow-md">Inicio</a>
            <a href="/create.php" class="text-center text-xs font-bold bg-white w-full py-2 px-12 rounded-lg shadow-md">Agregar</a>
        </div>
        <p class="mt-14 text-center font-medium text-center">Presentado por:</p>
        <p class="text-center font-medium mt-1 text-xs">Christoper Patiño y  Victor Manuel</p>
    </header>

    <main class="lg:ml-[300px] py-10 px-4 md:px-10">