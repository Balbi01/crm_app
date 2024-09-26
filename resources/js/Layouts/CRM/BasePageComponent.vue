<template>
    <div id="mainSpaComponent" class="flex h-full w-full">
        <div class="flex flex-col h-screen w-full">

            <!-- Header de la vista principal -->
            <div id="header" class="flex basis-1/6 w-full justify-between">
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col w-5/6">
                        <div class="input flex w-1/4 gap-2 my-6">
                            <input type="text" class="grow" placeholder="Componentes" />
                        </div>

                        <div id="mainButtons" class="flex flex-row flex-1">
                            <div class="flex items-center">
                                <button class="btn btn-outline mx-2 btn-active btn-secondary">Dashboard</button>
                                <button class="btn btn-outline mx-2 btn-info">Cotizaciones</button>
                                <button class="btn btn-outline mx-2 btn-primary">Ventas</button>
                                <button class="btn btn-outline mx-2 btn-accent">Métricas</button>
                                <button class="btn btn-outline mx-2 btn-neutral">Reportes</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row w-1/6">
                        <div class="flex flex-row justify-center w-full">
                            <!-- <button class="btn btn-outline mx-2 btn-neutral">
                                {{ $page.props.auth.user.name }}
                                
                            </button> -->
                            <details class="dropdown">
                                <summary class="btn m-1">
                                    {{ $page.props.auth.user.name }}
                                </summary>
                                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                        <li>
                                            <DropdownLink :href="route('profile.edit')"> Configuración </DropdownLink>
                                        </li>
                                        <!-- <li>
                                            <a class="text-red-500">Cerrar Sesión</a>
                                        </li> -->
                                        <li >
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                                <div class="text-red-500">
                                                    Cerrar Sesión

                                                </div>
                                            </DropdownLink>
                                        </li>
                                        
                                        
                                    </ul>
                            </details>
                        </div>
                    </div>

                </div>
                
                
            </div>

            <div class="flex flex-col basis-5/6 rounded-lg bg-scampi-200 w-full">
                <div class="h-full">
                    <div>
                        <p class="text-xl p-4 ml-4 text-gray-800 font-semibold">Listado de Usuarios</p>
                    </div>
                    <MainTableDisplay/>
                </div>
                                 
            </div>
        </div>
    </div>

</template>

<script setup>
import DropdownLink from '@/Components/DropdownLink.vue';
import MainTableDisplay from '@/Layouts/TableComponents/MainTableDisplay.vue';

</script>