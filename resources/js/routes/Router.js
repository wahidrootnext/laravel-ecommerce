import { createRouter, createWebHistory } from 'vue-router';

import Home from '../pages/Home.vue';
import Login from '../pages/Login.vue';
import Registration from '../pages/Registration.vue';
import Dashboard from '../pages/Dashboard.vue';
import NotFound from '../pages/NotFound.vue';

const Router = createRouter({
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

export default Router;