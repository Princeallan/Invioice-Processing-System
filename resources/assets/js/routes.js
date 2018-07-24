import Vue from 'vue'
import VueRouter from 'vue-router'

import home from './components/departments/create'
import invoices from './components/InvoicesList'

Vue.use(VueRouter);

export default new VueRouter({
    mode:'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home,
        },
        {
            path: '/invoices',
            name: 'invoices',
            component: invoices,
        },
    ],
});