<template>
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

<script>
import SideBarComponent from "./SidebarComponent.vue";
import BasePageComponent from "./BasePageComponent.vue";

const AppComponent = {
    components: {
        SideBarComponent,
        BasePageComponent
    }
}

export default AppComponent;
</script>
