require('./bootstrap');

import { createApp } from 'vue';
import Router from './Router';
import App from './App.vue';

createApp(App).use(Router).mount("#app");
