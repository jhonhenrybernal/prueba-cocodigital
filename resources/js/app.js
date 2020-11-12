require('./bootstrap');

window.Vue = require('vue');
import { VuejsDatatableFactory } from 'vuejs-datatable';

Vue.use(VuejsDatatableFactory);

Vue.component('all-plans', require('../js/components/plans/List.vue').default);


const app = new Vue({
    el: '#app',
});
