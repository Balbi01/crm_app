
<script setup>

// Componente del icono de usuarios
defineProps(
    {
        height: String,
        width: String,
    }
);
</script>

<template>
    <svg 
        xmlns="http://www.w3.org/2000/svg" 
        :width="width" 
        :height="height" 
        viewBox="0 0 24 24">
            <path 
                fill="currentColor" 
                d="M12 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM6.5 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0ZM3 19a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v3H3v-3Zm5-3a3 3 0 0 0-3 3v1h14v-1a3 3 0 0 0-3-3H8Z"/>
    </svg>
            
</template>
