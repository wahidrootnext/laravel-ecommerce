<template>
    <Navbar />
    <router-view></router-view>
</template>
<script>
    import Navbar from './Components/Navbar.vue';
    export default {
        name: "App",
        components: {
            Navbar
        }
    }
</script>