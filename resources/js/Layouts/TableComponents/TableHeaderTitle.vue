<template>
    <div class="text-xl text-gray-800 font-semibold mx-2">
        {{ title }}
    </div>

</template>
    
<script setup>

defineProps({
    title: String,
    icon: String,
    action: String
});

</script>