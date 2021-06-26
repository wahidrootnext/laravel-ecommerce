import { createRouter, createWebHistory } from 'vue-router';

import Home from './Pages/Home.vue';
import Login from './Pages/Login.vue';
import Registration from './Pages/Registration.vue';
import Dashboard from './Pages/Dashboard.vue';

const Router = createRouter({
    history: createWebHistory(),
    linkActiveClass: "active",
    routes: [
        { path: '/', name: 'home', component: Home },
        { path: '/login', name: 'login', component: Login },
        { path: '/registration', name: 'registration', component: Registration },
        { path: '/dashboard', name: 'dashboard', component: Dashboard },
    ]
});

export default Router;