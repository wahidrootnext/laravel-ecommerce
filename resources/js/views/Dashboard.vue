<template>
    <navbar></navbar>
    Welcome {{ user?.first_name }}
</template>
<script>
    import Navbar from '../components/Navbar.vue';
    import { mapGetters } from 'vuex';
    export default {
        components: {
            Navbar
        },
        computed: {
            ...mapGetters("auth", {
                user: 'getUser'
            })
        },
        mounted() {
            this.$store.dispatch("preloader/setLoading", true);
            this.$store.dispatch("auth/setUser").then(() => {
                this.$store.dispatch("preloader/setLoading", false);
            });
        }
    }
</script>
