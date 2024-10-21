<template>
    <div class="flex flex-col h-full w-full max-h-full bg-scampi-100 rounded-xl overflow-hidden">
        <div class="flex p-4 m-4 bg-white rounded-lg justify-between">

            <div class="flex flex-row items-center">
                <p class="flex flex-row items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm">
                        <UsersIcon width="20" height="20"/>
                    </button>
                </p>
                <TableHeaderTitle
                    title="Listado de Usuarios"
                />
            </div>
            <div class="flex flex-row">
                <div class="">
                    <button
                        @click="setComponent('UserForm')"
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <PlusIcon width="12" height="12"/>
                        Nuevo Usuario
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col h-full w-full p-4 mb-4 mx-4 bg-white rounded-lg overflow-auto">
            <div>
                Paginación
            </div>
            <div class="overflow-x-auto">
                <table class="table table-auto">
                    <thead>
                        <tr>
                            <th class="">ID</th>
                            <th class="min-w-[250px]">Nombre</th>
                            <th class="min-w-[250px]">Apellido Paterno</th>
                            <th class="min-w-[250px]">Apellido Materno</th>
                            <th class="min-w-[250px]">Correo</th>
                            <td class="min-w-[250px]">Creado</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="user in tableData">
                            <td class="">{{ user.id }}</td>
                            <td class="">{{ user.name }}</td>
                            <td class="">{{ user.last_name }}</td>
                            <td class="">{{ user.mother_last_name }}</td>
                            <td class="">{{ user.email }}</td>
                            <td class="">{{ user.created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
// Importa el store de usuarios
import { useUserStore } from '@/PiniaStores/userStore';
import { computed, onMounted } from 'vue';

// Componentes
import TableHeaderTitle from '@/Layouts/TableComponents/TableHeaderTitle.vue';

// Iconos
import UsersIcon from '../Icons/UsersIcon.vue';
import PlusIcon from '../Icons/PlusIcon.vue';

// Importa el store para manipular el contenido
import { useComponentStore } from '@/store';

// Instancia del store de usuarios
const userStore = useUserStore();

// Generar la instancia del Store de componentes
const componentStore = useComponentStore();

// Cambia el componente actual en el store
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

const tableData = computed(() => {
    return userStore.userList;
});

// Cuando el componente es cargado, se llama al método que obtiene el listado de usuarios
onMounted(() => {
    userStore.getUserList();
})

</script>