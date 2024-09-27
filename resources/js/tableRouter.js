import { createRouter, createWebHistory} from "vue-router";

import MainTableDisplay from "./Layouts/TableComponents/TableHeaderTitle.vue";
import UserTable from "./Layouts/SystemComponents/Users/UserTable.vue";

// Define las rutas de la aplicación
const routes = [
    { path: '/', component: UserTable }
];

const tableRouter = createRouter({
    history: createWebHistory(),
    routes
});

export default tableRouter;