<template>
    <div id="mainSpaComponent" class="flex h-full w-full">
        <div class="flex flex-col h-screen w-full">

            <!-- Header de la vista principal -->
            <div id="header" class="flex basis-1/6 w-full justify-between">
                <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col w-5/6">
                        <div class="input input-bordered flex w-1/4 gap-2 my-6">
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

                    <div class="flex flex-row flex-1">
                        <div class="flex flex-row justify-end">
                            <button class="btn btn-outline mx-2 btn-neutral">Configuración</button>
                        </div>
                    </div>

                </div>
                
                
            </div>

            <div class="flex basis-5/6 rounded-lg bg-scampi-200">
                
            </div>
        </div>
    </div>

</template>

<script setup>
</script>