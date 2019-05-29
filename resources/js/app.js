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




Vue.use(BootstrapVue);


Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('week-selection', require('./components/WeekSelection.vue').default);
Vue.component('footer-bar', require('./components/Footer.vue').default);
<<<<<<< HEAD
<<<<<<< .merge_file_Ph6ikU
Vue.component('week-selection-card', require('./components/WeekSelectionCard.vue').default);
Vue.component('week-selection-producer', require('./components/WeekSelectionProducer.vue').default);
const app = new Vue({
    el: '#app',
});
=======
Vue.component('history-bar', require('./components/HistoryBar.vue').default);
const app = new Vue({
    el: '#app',
});

$(document).ready(function () {
    $('.Count').each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
          duration: 1000,
          easing: 'swing',
          step: function (i) {
            $this.text(Math.ceil(i));
          }
        });
    });
});

>>>>>>> .merge_file_ZtCZFA
=======
Vue.component('week-selection-card', require('./components/WeekSelectionCard.vue').default);
Vue.component('week-selection-producer', require('./components/WeekSelectionProducer.vue').default);
const app = new Vue({
    el: '#app',
});
>>>>>>> a5e6155401d4a5e66c8653fa15ce5c09aa9d5e13
