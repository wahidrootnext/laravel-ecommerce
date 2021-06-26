<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <router-link :to="{ name: 'home' }" class="navbar-brand">SPA</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><router-link :to="{ name: 'home' }" class="nav-link">Home</router-link></li>
                    <li class="nav-item"><router-link :to="{ name: 'login' }" class="nav-link">Login</router-link></li>
                    <li class="nav-item"><router-link :to="{ name: 'registration' }" class="nav-link">Registration</router-link></li>
                    <li class="nav-item"><router-link :to="{ name: 'dashboard' }" class="nav-link">Dashboard</router-link></li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>