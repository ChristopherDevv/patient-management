<?php 
include './templates/header.php';
require './app/app.php';
$actualPatients = showPatients();
?>

    <div class="">
        <h2 class="font-bold text-3xl">Mostrando los pacientes actuales</h2>
        <section class="w-full mt-10 rounded-xl bg-white shadow-xl px-10 py-10">
            <?php if(empty($actualPatients)): ?>
                <h3 class="font-medium p-2 rounded-md text-blue-700 bg-blue-100 inline">No hay pacientes aun</h3>
            <?php else: ?>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edad</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Síntomas</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach($actualPatients as $patient): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"><?php echo $patient['name']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?php echo $patient['last_name']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?php echo $patient['age']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?php echo $patient['symptoms']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div class="w-7 h-7 rounded-md bg-blue-200 shadow-md flex items-center justify-center">
                                            <img class="w-5 h-auto" src="https://img.icons8.com/glyph-neue/64/228BE6/pencil-tip.png" alt="pencil-tip"/>
                                        </div>
                                        <div class="w-7 h-7 rounded-md bg-red-200 shadow-md flex items-center justify-center">
                                            <img class="w-5 h-auto" src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever"/>
                                        </div>
                                        
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>


           <a href="./create.php">
                <div class="mt-10 rounded-lg border-[5px] border-gray-200 border-dashed w-full transition-all duration-500 hover:bg-gray-300 min-h-[100px] p-5 bg-gray-100 flex items-center justify-center">
                    <span class="text-center font-bold">AGREGAR UN NUEVO PACIENTE</span>
                </div>
           </a>
        </section>
    </div>

<?php include './templates/footer.php' ?>