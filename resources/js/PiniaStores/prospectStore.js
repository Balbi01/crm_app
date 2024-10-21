import { defineStore } from "pinia";
import { ref } from "vue";
import axios from "axios";

/**
 * Este store es utilizado para manejar los datos responsivos de 
 * la lógica relacionada con Prospectos.
 * @author David Ibañez
 */
export const useProspectStore = defineStore('prospect', {
    state: () => ({
        // Lista de prospectos, se inicializa con un objeto de prueba, contiene los datos para la tabla principal.
        prospectList: [
            {
                code: 1,
                legal_name: 'Legal name',
                business_name: 'Business Name',
                rfc: 'TEST',
                email: 'omar@mail.com',
                phone: '123456789'
            }
        ],
    }),
    actions: {
        // Método que consulta la lista de prospectos y la asigna a la variable prospectList
        async getProspectList() {
            try {
                const response = await axios.get(route('prospectsIndex'));
                this.prospectList = response.data;
            } catch (error) {
                // console.error(error);
            }
        } 
    },
})