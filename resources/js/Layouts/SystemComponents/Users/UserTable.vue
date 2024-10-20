<template>
    <div class="flex flex-col w-full bg-scampi-100 rounded-xl">
        <div class="flex basis-1/12 p-4 m-4 bg-white rounded-lg">
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
                <div class="mt-4">
                    <button
                        @click="setComponent('UserForm')"
                        class="btn btn-outline btn-neutral btn-sm items-center">
                        <PlusIcon width="12" height="12"/>
                        Nuevo Usuario
                    </button>
                </div>
            </div>

        </div>

        <div class="flex basis-1 p-4 mx-4 bg-white rounded-lg">
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
                    <!-- row 4 -->
                    <tr>
                        <th>4</th>
                        <td>John Doe</td>
                        <td>john.doe@mail.com</td>
                        <td>JDOE123456</td>
                    </tr>
                    <!-- row 5 -->
                    <tr>
                        <th>5</th>
                        <td>Jane Smith</td>
                        <td>jane.smith@mail.com</td>
                        <td>JSMI654321</td>
                    </tr>
                    <!-- row 6 -->
                    <tr>
                        <th>6</th>
                        <td>Robert Brown</td>
                        <td>robert.brown@mail.com</td>
                        <td>RBRO789012</td>
                    </tr>
                    <!-- row 7 -->
                    <tr>
                        <th>7</th>
                        <td>Emily White</td>
                        <td>emily.white@mail.com</td>
                        <td>EWHI345678</td>
                    </tr>
                    <!-- row 8 -->
                    <tr>
                        <th>8</th>
                        <td>Michael Green</td>
                        <td>michael.green@mail.com</td>
                        <td>MGRE901234</td>
                    </tr>
                    <!-- row 9 -->
                    <tr>
                        <th>9</th>
                        <td>Sarah Black</td>
                        <td>sarah.black@mail.com</td>
                        <td>SBLK567890</td>
                    </tr>
                    <!-- row 10 -->
                    <tr>
                        <th>10</th>
                        <td>David Wilson</td>
                        <td>david.wilson@mail.com</td>
                        <td>DWIL123789</td>
                    </tr>
                    <!-- row 11 -->
                    <tr>
                        <th>11</th>
                        <td>Linda Johnson</td>
                        <td>linda.johnson@mail.com</td>
                        <td>LJOH456123</td>
                    </tr>
                    <!-- row 12 -->
                    <tr>
                        <th>12</th>
                        <td>James Taylor</td>
                        <td>james.taylor@mail.com</td>
                        <td>JTAY789456</td>
                    </tr>
                    <!-- row 13 -->
                    <tr>
                        <th>13</th>
                        <td>Patricia Anderson</td>
                        <td>patricia.anderson@mail.com</td>
                        <td>PAND123654</td>
                    </tr>
                    <!-- row 14 -->
                    <tr>
                        <th>14</th>
                        <td>Christopher Lee</td>
                        <td>christopher.lee@mail.com</td>
                        <td>CLEE987654</td>
                    </tr>
                    <!-- row 15 -->
                    <tr>
                        <th>15</th>
                        <td>Barbara Harris</td>
                        <td>barbara.harris@mail.com</td>
                        <td>BHAR321987</td>
                    </tr>
                    <!-- row 16 -->
                    <tr>
                        <th>16</th>
                        <td>Paul Clark</td>
                        <td>paul.clark@mail.com</td>
                        <td>PCLA654321</td>
                    </tr>
                    <!-- row 17 -->
                    <tr>
                        <th>17</th>
                        <td>Jessica Lewis</td>
                        <td>jessica.lewis@mail.com</td>
                        <td>JLEW789123</td>
                    </tr>
                    <!-- row 18 -->
                    <tr>
                        <th>18</th>
                        <td>Daniel Walker</td>
                        <td>daniel.walker@mail.com</td>
                        <td>DWAL456789</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</template>

<script setup>

// Componentes
import TableHeaderTitle from '@/Layouts/TableComponents/TableHeaderTitle.vue';

// Iconos
import UsersIcon from '../Icons/UsersIcon.vue';
import PlusIcon from '../Icons/PlusIcon.vue';

// Importa el store para manipular el contenido
import { useComponentStore } from '@/store';

// Generar la instancia del Store de componentes
const componentStore = useComponentStore();

// Cambia el componente actual en el store
function setComponent(componentName) {
    componentStore.setComponent(componentName);
}

</script>