require('./bootstrap');

import { createApp } from 'vue';
import routes from './routes';
import store from './store';
import app from './App.vue';

createApp(app).use(store).use(routes).mount("#app");