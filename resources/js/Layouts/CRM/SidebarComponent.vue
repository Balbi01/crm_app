<template>
    <div class="h-full">
        <div class="flex h-full w-full">    
            <div class="flex flex-wrap flex-col justify-between w-full h-full">
                <div class="flex flex-col">
                    <!-- Icono y titulo -->
                    <div id="title" 
                        class="
                        flex 
                        items-center 
                        bg-scampi-blue 
                        h-16 
                        my-4">
                        <div class="black 
                            align-middle
                            flex-1
                            font-bold
                            text-4xl
                            text-center
                            ">
                            BALBWARE
                        </div>
                    </div>

                    <!-- Buscador -->
                    <div class="flex m-2 mt-6 items-center gap-2">
                        <input type="text" class="input input-bordered w-full" placeholder="Buscar" />
                    </div>

                    <!-- Menu principal lateral -->
                    <div class="flex m-2 ">
                        <ul class="flex menu bg-scampi-white rounded-box w-full">

                            <!-- Botón de clientes -->
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                            <circle cx="9" cy="7" r="4"/>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87m-3-12a4 4 0 0 1 0 7.75"/>
                                        </g>
                                    </svg>
                                    <a class="align-middle">Clientes</a>
                                </div>
                            </li>

                            <!-- Botón prospectos -->
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M8 8h2v4H8zm0 6h2v4H8zm6-6h2v4h-2zm0 6h2v4h-2zm-6 6h2v4H8zm6 0h2v4h-2z"/>
                                        <path fill="currentColor" d="M30 14a2 2 0 0 0-2-2h-6V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v26h28ZM4 4h16v24H4Zm18 24V14h6v14Z"/>
                                    </svg>
                                    <!-- <a class="align-middle">Prospectos</a> -->
                                    <button class="align-middle" @click="setComponent('UserForm')">Prospectos</button>

                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 2048 2048">
                                        <path fill="currentColor" d="m960 120l832 416v1040l-832 415l-832-415V536l832-416zm625 456L960 264L719 384l621 314l245-122zM960 888l238-118l-622-314l-241 120l625 312zM256 680v816l640 320v-816L256 680zm768 1136l640-320V680l-640 320v816z"/>
                                    </svg>
                                    <a class="align-middle">Productos y Servicios</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 8 8">
                                        <path fill="currentColor" d="M3 0v1h-.75C1.57 1 1 1.57 1 2.25v.5c0 .68.44 1.24 1.09 1.41l2.56.66c.14.04.34.29.34.44v.5c0 .14-.11.25-.25.25h-2.5a.56.56 0 0 1-.25-.06v-.94h-1v1c0 .34.2.63.44.78c.23.16.52.22.81.22h.75v1h1v-1h.75c.69 0 1.25-.56 1.25-1.25v-.5c0-.68-.44-1.24-1.09-1.41l-2.56-.66C2.2 3.15 2 2.9 2 2.75v-.5c0-.14.11-.25.25-.25h2.5c.11 0 .21.04.25.06V3h1V2c0-.34-.2-.63-.44-.78c-.23-.16-.52-.22-.81-.22H4V0H3z"/>
                                    </svg>
                                    <a class="align-middle">Vendedores</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 11.5v2m2.5-3v2m-5-2v2m8-12h-11a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1"/>
                                            <path d="M7 6.25a1.75 1.75 0 1 0 0-3.5a1.75 1.75 0 0 0 0 3.5m-4.225-1.5a.25.25 0 0 1 0-.5m0 .5a.25.25 0 0 0 0-.5m8.45.5a.25.25 0 1 1 0-.5m0 .5a.25.25 0 1 0 0-.5"/>
                                        </g>
                                    </svg>
                                    <a class="align-middle">Pagos</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M2 21V7l10-4l10 4v14h-6v-8H8v8H2Zm7 0v-2h2v2H9Zm2-3v-2h2v2h-2Zm2 3v-2h2v2h-2Z"/>
                                    </svg>
                                    <a class="align-middle">Inventario</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM6.5 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0ZM3 19a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v3H3v-3Zm5-3a3 3 0 0 0-3 3v1h14v-1a3 3 0 0 0-3-3H8Z"/></svg>
                                    <button class="align-middle" @click="setComponent('UserTable')">Usuarios</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Menu Final -->
                <div id="closeS" class="flex mb-2">
                    <ul class="flex menu rounded-box w-full">
                        <li class="flex font-bold">
                            <div class="flex h-12 items-center">
                                <a class="align-middle">Personalización</a>
                            </div>
                        </li>
                        <!-- <li class="flex font-bold">
                            <div class="flex h-12 items-center">
                                <a class="align-middle text-red-500">Cerrar Sesión</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useComponentStore } from '@/store';

const componentStore = useComponentStore();

// Cambia el componente actual en el store
// const setComponent = (componentName) => {
//     componentStore.setComponent(componentName);
// };

function setComponent(componentName) {
    componentStore.setComponent(componentName);
}
</script>
