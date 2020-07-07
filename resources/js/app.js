/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueClazyLoad from 'vue-clazy-load';
require('./bootstrap');

window.Vue = require('vue');
Vue.component('layout-component', require('./components/LayoutComponent.vue').default);
Vue.use(VueClazyLoad);

const app = new Vue({
    el: '#app',
});