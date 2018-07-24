
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('departments', require('./components/departments/departmentslist.vue'));

Vue.component('create-department', require('./components/departments/create.vue'));

Vue.component('InvoicesList', require('./components/InvoicesList.vue'));

import Vue from 'vue';
import router from './routes'

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';
Vue.use(ElementUI, { locale });


new Vue({
    router
}).$mount('#app');

