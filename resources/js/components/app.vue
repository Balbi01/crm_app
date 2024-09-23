<template>
    <div class="h-screen">
        <SideBarComponent/>

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

const AppComponent = {
    components: {
        SideBarComponent
    }
}

export default AppComponent;
</script>
