<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
            <!-- <div>
                <p class="text-xl text-gray-800 font-semibold">Listado de Usuarios</p>
            </div> -->
            <div class="flex flex-row items-center">
                <p class="flex flex-row items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm">
                        <UsersIcon width="20" height="20"/>
                    </button>
                </p>
                <!-- <div class="text-xl text-gray-800 font-semibold mx-2">
                    Listado de Usuarios
                </div> -->
                <TableHeaderTitle
                    title="Listado de Usuarios"
                />
            </div>
            <div class="flex flex-row">
                <div class="mt-4">
                    <button
                        @click="setComponent('UserForm')" 
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <PlusIcon width="12" height="12"/>
                        Nuevo Usuario
                    </button>
                </div>
            </div>
            
        </div>

        <div class="p-4 mx-4 bg-white rounded-lg">
            <table class="table h-full">
            <!-- head -->
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>RFC</th>
                    </tr>
                </thead>
                <tbody class="h-full">
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>USUARIOS TEST</td>
                        <td>cy_g@mail.com</td>
                        <td>XXOXOXX123</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>2</th>
                        <td>Marie-ann Duffield</td>
                        <td>example@mail.com</td>
                        <td>XXOXOXX123</td>
                            
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>3</th>
                        <td>Marie-sin McDuffield</td>
                        <td>marie@mail.com</td>
                        <td>IACO00120712N</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    

</template>

<script setup>

// Componentes
import TableHeaderTitle from '@/Layouts/TableComponents/TableHeaderTitle.vue';

// Iconos
import UsersIcon from '../Icons/UsersIcon.vue';
import PlusIcon from '../Icons/PlusIcon.vue';

// Importa el store para manipular el contenido
import { useComponentStore } from '@/store';

// Generar la instancia del Store de componentes
const componentStore = useComponentStore();

// Cambia el componente actual en el store
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

</script>