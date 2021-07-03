<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <router-link :to="{ name: 'home' }" class="navbar-brand">SPA</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" v-if="!currentUser"><router-link :to="{ name: 'home' }" class="nav-link">Home</router-link></li>
                    <li class="nav-item" v-if="!currentUser"><router-link :to="{ name: 'login' }" class="nav-link">Login</router-link></li>
                    <li class="nav-item" v-if="!currentUser"><router-link :to="{ name: 'registration' }" class="nav-link">Registration</router-link></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hello {{ currentUser?.first_name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#" @click.prevent="logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    import { mapMutations, mapGetters } from 'vuex';
    export default {
        name: "navbar",
        methods: {
            ...mapMutations( 'auth', ['logout'])
        },
        computed: {
            ...mapGetters('auth', {
                currentUser: 'getUser'
            })
        }
    }
</script>
