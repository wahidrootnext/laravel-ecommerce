<template>
    <router-view></router-view>
    <preloader v-if="loading"></preloader>
</template>
<script>
    import { mapGetters } from 'vuex';
    import preloader from './components/Preloader.vue';
    export default {
        components: {
            preloader
        },
        computed: {
            ...mapGetters('preloader', {
                loading: 'getLoading'
            })
        }
    }
</script>