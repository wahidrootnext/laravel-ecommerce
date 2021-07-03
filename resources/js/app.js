require('./bootstrap');

import { createApp } from 'vue';
import router from './router';
import store from './store';
import app from './App.vue';

if (localStorage.getItem("access_token")) {
    axios.defaults.headers.common['Authorization'] = "Bearer " + localStorage.getItem("access_token");
} else {
    delete axios.defaults.headers.common['Authorization'];
}

createApp(app).use(store).use(router).mount("#app");