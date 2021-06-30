import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Registration from '../views/Registration.vue';
import Dashboard from '../views/Dashboard.vue';
import NotFound from '../views/NotFound.vue';

export default createRouter({
    history: createWebHistory(),
    linkActiveClass: "active",
    routes: [
        { path: '/', name: 'home', component: Home },
        { path: '/login', name: 'login', component: Login },
        { path: '/registration', name: 'registration', component: Registration },
        { path: '/dashboard', name: 'dashboard', component: Dashboard },
        { path: '/dashboard', name: 'dashboard', component: Dashboard },
        { path: '/:pathMatch(.*)*', name: '404', component: NotFound },
    ]
});