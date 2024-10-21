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
                <table class="table table-auto w-full">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>RFC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>USUARIOS TEST</td>
                            <td>cy_g@mail.com</td>
                            <td>XXOXOXX123</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Marie-ann Duffield</td>
                            <td>example@mail.com</td>
                            <td>XXOXOXX123</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Marie-sin McDuffield</td>
                            <td>marie@mail.com</td>
                            <td>IACO00120712N</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>John Doe</td>
                            <td>john.doe@mail.com</td>
                            <td>JDOE123456</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Jane Smith</td>
                            <td>jane.smith@mail.com</td>
                            <td>JSMI654321</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Robert Brown</td>
                            <td>robert.brown@mail.com</td>
                            <td>RBRO789012</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <td>Emily White</td>
                            <td>emily.white@mail.com</td>
                            <td>EWHI345678</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td>Michael Green</td>
                            <td>michael.green@mail.com</td>
                            <td>MGRE901234</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td>Sarah Black</td>
                            <td>sarah.black@mail.com</td>
                            <td>SBLK567890</td>
                        </tr>
                        <tr>
                            <th>10</th>
                            <td>David Wilson</td>
                            <td>david.wilson@mail.com</td>
                            <td>DWIL123789</td>
                        </tr>
                        <tr>
                            <th>11</th>
                            <td>Linda Johnson</td>
                            <td>linda.johnson@mail.com</td>
                            <td>LJOH456123</td>
                        </tr>
                        <tr>
                            <th>12</th>
                            <td>James Taylor</td>
                            <td>james.taylor@mail.com</td>
                            <td>JTAY789456</td>
                        </tr>
                        <tr>
                            <th>13</th>
                            <td>Patricia Anderson</td>
                            <td>patricia.anderson@mail.com</td>
                            <td>PAND123654</td>
                        </tr>
                        <tr>
                            <th>14</th>
                            <td>Christopher Lee</td>
                            <td>christopher.lee@mail.com</td>
                            <td>CLEE987654</td>
                        </tr>
                        <tr>
                            <th>15</th>
                            <td>Barbara Harris</td>
                            <td>barbara.harris@mail.com</td>
                            <td>BHAR321987</td>
                        </tr>
                        <tr>
                            <th>16</th>
                            <td>Paul Clark</td>
                            <td>paul.clark@mail.com</td>
                            <td>PCLA654321</td>
                        </tr>
                        <tr>
                            <th>17</th>
                            <td>Jessica Lewis</td>
                            <td>jessica.lewis@mail.com</td>
                            <td>JLEW789123</td>
                        </tr>
                        <tr>
                            <th>18</th>
                            <td>Daniel Walker</td>
                            <td>daniel.walker@mail.com</td>
                            <td>DWAL456789</td>
                        </tr>
                        <tr>
                            <th>19</th>
                            <td>Laura Martinez</td>
                            <td>laura.martinez@mail.com</td>
                            <td>LMAR123456</td>
                        </tr>
                        <tr>
                            <th>20</th>
                            <td>Steven Robinson</td>
                            <td>steven.robinson@mail.com</td>
                            <td>SROB654321</td>
                        </tr>
                        <tr>
                            <th>21</th>
                            <td>Angela Scott</td>
                            <td>angela.scott@mail.com</td>
                            <td>ASCO789012</td>
                        </tr>
                        <tr>
                            <th>22</th>
                            <td>Brian King</td>
                            <td>brian.king@mail.com</td>
                            <td>BKIN345678</td>
                        </tr>
                        <tr>
                            <th>23</th>
                            <td>Rebecca Wright</td>
                            <td>rebecca.wright@mail.com</td>
                            <td>RWRG901234</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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