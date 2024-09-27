
<script setup>

// Componente del icono de regresar
defineProps(
    {
        height: String,
        width: String,
    }
);
</script>

<template>
    <!-- SVG de flecha hacia atrás -->
    <svg 
        xmlns="http://www.w3.org/2000/svg" 
        :width="width" 
        :height="height" 
        viewBox="0 0 20 20">
            <path fill="currentColor" d="M18 9v2H6l4 4l-1 2l-7-7l7-7l1 2l-4 4h12z"/>        
    </svg>
            
</template>
