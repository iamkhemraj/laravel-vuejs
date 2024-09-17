import './bootstrap';

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';

// Import your components
import Home from './components/Home.vue';
import Register from './components/Register.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/register', component: Register }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount('#app');
createApp(Register).use(router).mount('#register');
