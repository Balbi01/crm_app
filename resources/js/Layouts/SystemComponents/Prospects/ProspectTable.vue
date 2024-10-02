<template>
    <div class="flex flex-col w-full h-full bg-scampi-100 rounded-xl">
        <div class="p-4 m-4 bg-white rounded-lg">
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
                <div class="mt-4">
                    <button
                        @click="setComponent('ProspectForm')" 
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <PlusIcon width="12" height="12"/>
                        Nuevo Prospecto
                    </button>
                </div>
            </div>
            
        </div>

        <div class="p-4 mx-4 bg-white rounded-lg">
            <table class="table h-full">
                
            <!-- head -->
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>RFC</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>


                <tbody class="h-full">
                    <!-- row 1 -->
                    <tr v-for="prospect in tableData">
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