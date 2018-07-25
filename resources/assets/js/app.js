
require('./bootstrap');

window.Vue = require('vue');


Vue.component('departments', require('./components/departments/departmentslist.vue'));

Vue.component('create-invoice', require('./components/invoices/create'));

Vue.component('create-department', require('./components/departments/create.vue'));


import Vue from 'vue';
import router from './routes'


import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';

Vue.use(ElementUI, { locale });


const app = new Vue({
    el:'#app',
    router
});

