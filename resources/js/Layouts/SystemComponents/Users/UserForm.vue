<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
            <div>
                <p class="flex items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm" @click="setComponent('UserTable')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M18 9v2H6l4 4l-1 2l-7-7l7-7l1 2l-4 4h12z"/>
                        </svg>
                    </button>
                    
                    <div class="text-xl text-gray-800 font-semibold mx-2">
                        Formulario Nuevo Usuario
                    </div>
                </p>
            </div>
            <div class="flex flex-row">
                <div class="mt-4">
                    <button 
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M14.8 9c.1-.3.2-.6.2-1c0-2.2-1.8-4-4-4c-1.5 0-2.9.9-3.5 2.2c-.3-.1-.7-.2-1-.2C5.1 6 4 7.1 4 8.5c0 .2 0 .4.1.5c-1.8.3-3.1 1.7-3.1 3.5C1 14.4 2.6 16 4.5 16h10c1.9 0 3.5-1.6 3.5-3.5c0-1.8-1.4-3.3-3.2-3.5zm-6.3 5.9l-3.2-3.2l1.4-1.4l1.8 1.8l3.8-3.8l1.4 1.4l-5.2 5.2z"/>
                        </svg>
                        Guardar
                    </button>
                </div>
            </div>
        </div>

        <div class="p-4 mx-4 bg-white rounded-lg w-3/5">
            <div class="pl-4">
                <div class="font-semibold">
                    <p>Datos Generales</p>
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <input type="text" class="input input-bordered w-full" placeholder="Nombre" />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <input type="text" class="input input-bordered w-full" placeholder="Apellidos" />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <input type="text" class="input input-bordered w-full" placeholder="Correo Electrónico" />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <input type="text" class="input input-bordered w-full" placeholder="Contraseña" />
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>

import { useComponentStore } from '@/store';

const componentStore = useComponentStore();

function setComponent(componentName) {
    componentStore.setComponent(componentName);
}
</script>

<style>

</style>