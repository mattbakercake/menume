import { createApp } from 'vue';
import './bootstrap';
import router from './router';

import App from './App.vue';

import '../css/app.css';
import 'nprogress/nprogress.css'

createApp(App).use(router).mount('#app');
