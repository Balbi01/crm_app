<template>
    <Head title="CRM Dashboard" />

    <div class="flex h-screen w-screen overflow-hidden">
        <div class="h-full basis-1/6">
             <SideBarComponent/>
        </div>
        <div class="h-full basis-5/6 overflow-auto">
            <BasePageComponent/>

        </div>
    </div>

</template>

<script setup>
import SideBarComponent from '@/Layouts/CRM/SidebarComponent.vue';
import BasePageComponent from '@/Layouts/CRM/BasePageComponent.vue';
import { Head } from '@inertiajs/vue3';

</script>
