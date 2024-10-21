import { defineStore } from "pinia";
import axios from "axios";

/**
 * Store utilizado para manejar los datos de la lógica relacionada
 * con los datos de Usuarios
 * @author David Ibañez
 */
export const useUserStore = defineStore('user', {
    state: () => ({
        // Lista de usuarios, inicializado con un objeto de prueba
        userList: [
            ]
    }),
    actions: {
        async getUserList() {
            try {
                const response = await axios.get(route('usersIndex'));
                console.log(response);
                this.userList = response.data;
            } catch (e) {
                console.log(e);
            }
        }
    }
})