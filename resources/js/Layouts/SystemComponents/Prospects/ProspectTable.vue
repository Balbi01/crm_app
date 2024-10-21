<template>
    <div class="flex flex-col h-full max-h-full bg-scampi-100 rounded-xl overflow-hidden">
        <div class="flex p-4 m-4 bg-white rounded-lg justify-between">

            <div class="flex flex-row items-center">
                <p class="flex flex-row items-center">
                    <button class="btn btn-square btn-ghost cursor-pointer btn-sm">
                        <ProspectsIcon width="20" height="20"/>
                    </button>
                </p>
                <TableHeaderTitle
                    title="Listado de Prospectos"
                />
            </div>
            <div class="flex flex-row">
                <button
                    @click="setComponent('ProspectForm')"
                    class="btn btn-outline btn-neutral btn-sm items-center">
                    <PlusIcon width="12" height="12"/>
                    Nuevo Prospecto
                </button>
            </div>

        </div>

        <div class="flex flex-col h-full p-4 mb-4 mx-4 bg-white rounded-lg overflow-auto">
            <div>
                Paginación
            </div>

            <div class="overflow-x-auto">
                <table class="table table-auto">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="min-w-[150px]">Código</th>
                            <th class="min-w-[150px]">Nombre</th>
                            <th class="min-w-[150px]">Apellido</th>
                            <th class="min-w-[150px]">RFC</th>
                            <th class="min-w-[150px]">Correo</th>
                            <th class="min-w-[150px]">Teléfono</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="prospect in tableData">
                            <td>{{ prospect.id }}</td>
                            <td>{{ prospect.code }}</td>
                            <td>{{ prospect.legal_name }}</td>
                            <td>{{ prospect.business_name }}</td>
                            <td>{{ prospect.rfc }}</td>
                            <td>{{ prospect.email }}</td>
                            <td>{{ prospect.phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</template>

<script setup>
// Importa el store
import { useProspectStore } from '@/PiniaStores/prospectStore';
import { computed, onMounted } from 'vue';

// Importa el store para manipular el contenido
import { useComponentStore } from '@/store';
import ProspectsIcon from '../Icons/ProspectsIcon.vue';

import TableHeaderTitle from '@/Layouts/TableComponents/TableHeaderTitle.vue';

// Iconos
import PlusIcon from '../Icons/PlusIcon.vue';


// Generar la instancia del Store de prospectos
const prospectStore = useProspectStore();

// Generar la instancia del Store de componentes
const componentStore = useComponentStore();

// Store para intercambiar el componente de tabla a formulario
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

const tableData = computed(() => {
    return prospectStore.prospectList;
});

// Cuando el componente se carga, llama a la función para obtener la lista de prospectos.
onMounted(() => {
    prospectStore.getProspectList();
});


</script>