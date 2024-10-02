
<script setup>

// Íconos
import ArrowBackIcon from '../Icons/ArrowBackIcon.vue';
import SaveIcon from '../Icons/SaveIcon.vue';

import { useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';

// Store
import { useComponentStore } from '@/store';

// Instancia del Store (Pinia)
const componentStore = useComponentStore();


// Métodos
/**
 * @param {string} componentName 
 * Cambia el componente actual en el store por el componente recibido en 
 * componentName
 */
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

// Definición del formulario
const prospectForm = useForm({
    code: '',
    legalName: '',
    businessName: '',
    rfc: '',
    email: '',
    phone: ''
});

// Guardado de datos del Prospecto
const submitProspectForm = () => {
    prospectForm.post(route('createProspect'), {
        onFinish: () => prospectForm.reset(
            'code',
            'legalName',
            'businessName',
            'rfc',
            'email',
            'phone'
        )
    });
};

</script>

<template>
    <form @submit.prevent="submitProspectForm" class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
            <div>
                <p class="flex items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm" @click="setComponent('ProspectTable')">
                        <ArrowBackIcon width="22" height="22"/>
                    </button>
                    
                    <div class="text-xl text-gray-800 font-semibold mx-2">
                        Formulario Nuevo Prospecto
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

                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.code"
                        required
                        placeholder="Código"
                    />

                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.legalName"
                        required
                        placeholder="Nombre (Razón Social)"
                    />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.businessName"
                        required
                        placeholder="Nombre Comercial"
                    />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.rfc"
                        required
                        placeholder="RFC"
                    />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.email"
                        required
                        placeholder="Correo electrónico"
                    />
                </div>
                <div class="flex w-3/4 gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        class="input input-bordered w-full"
                        v-model="prospectForm.phone"
                        required
                        placeholder="Número telefónico"
                    />
                </div>

            </div>
        </div>
    </form>

</template>
