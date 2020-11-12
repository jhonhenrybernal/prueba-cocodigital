require('./bootstrap');

window.Vue = require('vue');

Vue.component('all-plans', require('../js/components/plans/list.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        currentActivity: 'home'
    }
});
