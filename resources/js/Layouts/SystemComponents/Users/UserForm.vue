<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 w-1/2 bg-white rounded-lg">
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
        </div>

        <div class="flex w-full">
            <div class="pl-4 w-1/2 rounded-lg p-4 mx-4 bg-white">
                <div class="font-semibold">
                    <p>Datos Generales</p>
                </div>
                <div class="flex gap-2 my-6">
                    <TextInput
                        id="firstName" 
                        type="text" 
                        v-model="userForm.name"
                        required
                        placeholder="Nombres"
                    />
                </div>
                <div class="flex gap-2 my-6">
                    <TextInput
                        id="lastName" 
                        type="text" 
                        v-model="userForm.last_name"
                        required
                        placeholder="Apellido Paterno"
                    />
                </div>
                <div class="flex gap-2 my-6">
                    <TextInput
                        id="motherLastName" 
                        type="text" 
                        v-model="userForm.second_last_name"
                        required
                        placeholder="Apellido Materno"
                    />
                </div>
                <div class="flex gap-2 my-6">
                    <TextInput
                        id="email" 
                        type="text" 
                        v-model="userForm.email"
                        required
                        placeholder="Correo Electrónico"
                    />
                </div>
                <div class="flex gap-2 my-6">
                    <TextInput
                        id="password" 
                        v-model="userForm.password"
                        required
                        placeholder="Contraseña"
                        :input-type="'password'"
                    />
                </div>
                <div class="flex flex-row justify-end">
                    <div class="mt-4">
                        <button 
                            class="btn btn-primary btn-outline items-center">
                            Guardar
                        </button>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

</template>

<script setup>

// Íconos
import { useForm } from '@inertiajs/vue3';
import ArrowBackIcon from '../Icons/ArrowBackIcon.vue';
import SaveIcon from '../Icons/SaveIcon.vue';

import { useComponentStore } from '@/store';
import TextInput from '@/Components/TextInput.vue';

const componentStore = useComponentStore();

function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

// Definición del formulario
const userForm = useForm({
    name: '',
    last_name: '',
    second_last_name: '',
    email: '',
    password: '',
});

// Guardado del usuario
const submitUserForm = () => {
    userForm.post(route('createUser'), {
        onFinish: () => userForm.reset(
            'name',
            'last_name',
            'second_last_name',
            'email',
            'password'
        )
    });
}
</script>
