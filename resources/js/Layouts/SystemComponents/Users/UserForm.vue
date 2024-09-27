<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
            <div>
                <p class="flex items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm" @click="setComponent('UserTable')">
                        <ArrowBackIcon width="22" height="22"/>
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
                        <SaveIcon width="22" height="22"/>    
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

// Íconos
import ArrowBackIcon from '../Icons/ArrowBackIcon.vue';
import SaveIcon from '../Icons/SaveIcon.vue';

import { useComponentStore } from '@/store';

const componentStore = useComponentStore();

function setComponent(componentName) {
    componentStore.setComponent(componentName);
}
</script>

<style>

</style>