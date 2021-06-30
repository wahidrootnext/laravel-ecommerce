<template>
    <div class="preloader">
        <div class="spinner-border text-primary"></div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        background-color: rgba(255, 255, 255, .5);
    }
</style>