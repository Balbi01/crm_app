<template>
    <Head title="CRM Dashboard" />

    <div class="flex h-screen w-screen">
        <div class="h-full w-1/5">
         <SideBarComponent/>

        </div>
        <div class="h-full w-4/5">
        <BasePageComponent/>

        </div>
    </div>
    
</template>

<script setup>
import SideBarComponent from '@/Layouts/CRM/SidebarComponent.vue';
import BasePageComponent from '@/Layouts/CRM/BasePageComponent.vue';
import { Head } from '@inertiajs/vue3';

</script>
