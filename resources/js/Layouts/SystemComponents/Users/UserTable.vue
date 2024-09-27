<template>
    <div class="flex flex-col w-full h-full bg-scampi-50 rounded-xl">
        <div class="p-4 ml-4">
            <div>
                <p class="text-xl text-gray-800 font-semibold">Listado de Usuarios</p>
            </div>
            <div class="my-4">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="evenodd" d="M8 7h3.5a.5.5 0 1 1 0 1H8v3.5a.5.5 0 1 1-1 0V8H3.5a.5.5 0 0 1 0-1H7V3.5a.5.5 0 0 1 1 0zm-.5-7C11.636 0 15 3.364 15 7.5S11.636 15 7.5 15S0 11.636 0 7.5S3.364 0 7.5 0m0 .882a6.618 6.618 0 1 0 0 13.236A6.618 6.618 0 0 0 7.5.882"/>
                </svg> -->
                
                <button class="btn btn-outline btn-neutral btn-sm items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 1024 1024">
                        <path fill="currentColor" d="M960 640H640v320q0 27-18.5 45.5T576 1024H448q-27 0-45.5-19T384 960V640H64q-27 0-45.5-19T0 576V448q0-27 18.5-45.5T64 384h320V64q0-27 18.5-45.5T448 0h128q27 0 45.5 18.5T640 64v320h320q27 0 45.5 18.5T1024 448v128q0 26-18.5 45T960 640z"/>
                    </svg>
                    Nuevo Usuario
                </button>
            </div>
        </div>

        <div class="">
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

import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

</script>