
require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import router from './routes'

Vue.component('departments', require('./components/departments/departmentslist.vue'));

Vue.component('create-department', require('./components/departments/create.vue'));

Vue.component('create-product', require('./components/Products/CreateProduct.vue'));

Vue.component('products', require('./components/Products/ProductList.vue'));

Vue.component('createinvoice', require('./components/Invoices/CreateInvoice'));

// Vue.component('create', require('./components/Invoices/Create'));




import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';

Vue.use(ElementUI, { locale });


const app = new Vue({
    el:'#app',
    router
});

