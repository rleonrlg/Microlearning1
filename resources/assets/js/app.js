
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import {ServerTable} from 'vue-tables-2';
Vue.use(ServerTable, {}, false, 'bootstrap4', 'default');

import vueResource from 'vue-resource';
Vue.use(vueResource);

import StripeForm from './components/StripeForm';
Vue.component('stripe-form', StripeForm);

import Courses from './components/Courses';
Vue.component('courses-list', Courses);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app'
});
