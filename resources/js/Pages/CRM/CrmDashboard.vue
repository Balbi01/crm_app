<template>
    <Head title="CRM Dashboard" />

    <div class="flex h-full w-full">
        <SideBarComponent/>
        <BasePageComponent/>
    </div>
    <!-- <h1>Hello World!</h1> -->
    <!-- <nav>
        <div> -->
            <!-- <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link> -->

        <!-- </div>
    </nav> -->
    <!-- <main>
        <router-view/>
    </main> -->
</template>

<script setup>
import SideBarComponent from '@/Layouts/CRM/SidebarComponent.vue';
import BasePageComponent from '@/Layouts/CRM/BasePageComponent.vue';
import { Head } from '@inertiajs/vue3';

</script>
