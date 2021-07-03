import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Login from '../views/Login.vue';
import Registration from '../views/Registration.vue';
import Dashboard from '../views/Dashboard.vue';
import NotFound from '../views/NotFound.vue';

const router = createRouter({
    history: createWebHistory(),
    linkActiveClass: "active",
    routes: [
        { path: '/', name: 'home', component: Home, meta: { auth: undefined } },
        { path: '/login', name: 'login', component: Login, meta: { auth: false } },
        { path: '/registration', name: 'registration', component: Registration, meta: { auth: false } },
        { path: '/dashboard', name: 'dashboard', component: Dashboard, meta: { auth: true } },
        { path: '/:pathMatch(.*)*', name: '404', component: NotFound, meta: { auth: undefined } },
    ]
});

router.beforeEach((to, from) => {
    if (to.meta.auth === true && !localStorage.getItem("access_token")) {
        return {
            name: 'login',
        }
    } else if (to.meta.auth === false && localStorage.getItem("access_token")) {
        return {
            name: 'dashboard',
        }
    }
})

export default router;