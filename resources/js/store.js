import { defineStore } from "pinia";
import { ref } from "vue";

export const useComponentStore = defineStore('component', {
    state: () => ({
        currentComponent: ref('ProspectTable'),
    }),
    actions: {
        setComponent(componentName = 'UserTable') {
            this.currentComponent = componentName;
            console.log('Component changed to: ', componentName);
        },
    },
    
});
