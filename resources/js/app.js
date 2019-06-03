/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import '../style/style.css';
// import Counter from './countUp/dist/countUp'

window.$ = require('jquery')
window.JQuery = require('jquery')



Vue.use(BootstrapVue);



Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('week-selection', require('./components/SelectionSemaine.vue').default);
Vue.component('footer-bar', require('./components/Footer.vue').default);
Vue.component('week-selection-card', require('./components/CarteSelectionSemaine.vue').default);
Vue.component('week-selection-producer', require('./components/ProducteurSelectionSemaine.vue').default);
Vue.component('history-bar', require('./components/HistoryBar.vue').default);

//Filtre produits et formulaire de contact 
Vue.component('product-filter', require('./components/ProductFilter.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);

//Page produits
Vue.component('nav-product-bar', require('./components/NavProductBar.vue').default);
Vue.component('product-page', require('./components/ProductPage.vue').default);

const app = new Vue({
    el: '#app',
});



// var c = new Counter("counter", 0.4815);
// c.start();


$(document).ready(function() {

    var quantitiy = 0;
    $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

    });

    $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
            $('#quantity').val(quantity - 1);
        }
    });

});