
window.axios = require('axios');


import Vue from 'vue'
import VueRouter from 'vue-router';
import { routes } from './routes';
import VueFullpage from 'fullpage-vue';
import VueTheMask from 'vue-the-mask';


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



Vue.use(VueRouter);
Vue.use(VueFullpage);
Vue.use(VueTheMask);

const router = new VueRouter({
    mode: 'history',
    routes
});
new Vue({
  el: '#app',
  router
});