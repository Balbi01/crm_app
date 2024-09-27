<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
            <!-- <div>
                <p class="text-xl text-gray-800 font-semibold">Listado de Usuarios</p>
            </div> -->
            <div class="flex flex-row items-center">
                <p class="flex flex-row items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM6.5 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0ZM3 19a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v3H3v-3Zm5-3a3 3 0 0 0-3 3v1h14v-1a3 3 0 0 0-3-3H8Z"/></svg>
                    </button>
                </p>
                <div class="text-xl text-gray-800 font-semibold mx-2">
                        Listado de Usuarios
                    </div>
            </div>
            <div class="flex flex-row">
                <div class="mt-4">
                    <button
                        @click="setComponent('UserForm')" 
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M960 640H640v320q0 27-18.5 45.5T576 1024H448q-27 0-45.5-19T384 960V640H64q-27 0-45.5-19T0 576V448q0-27 18.5-45.5T64 384h320V64q0-27 18.5-45.5T448 0h128q27 0 45.5 18.5T640 64v320h320q27 0 45.5 18.5T1024 448v128q0 26-18.5 45T960 640z"/>
                        </svg>
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

// Importa el store para manipular el contenido
import { useComponentStore } from '@/store';

// Generar la instancia del Store de componentes
const componentStore = useComponentStore();

// Cambia el componente actual en el store
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

</script>