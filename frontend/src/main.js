import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import Register from './pages/Register.vue';
import Pricing from './pages/Pricing.vue';
import About from './pages/About.vue';
import Property from './pages/Property.vue';

const router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: Home },
    { path: '/register', component: Register },
    { path: '/pricing', component: Pricing },
    { path: '/property/:id', component: Property, props: true },
    { path: '/about', component: About },
  ]
});

new Vue({
  el: '#app',
  router: router,
  render: h => h(App)
});