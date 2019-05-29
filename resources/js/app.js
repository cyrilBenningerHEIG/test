/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import '../style/style.css'
Vue.use(BootstrapVue);


Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('footer-bar', require('./components/Footer.vue').default);


const app = new Vue({
    el: '#app',
    logo: {
        url: 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'
      },
});
