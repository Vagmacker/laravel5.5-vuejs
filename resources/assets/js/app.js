require('./bootstrap');

window.Vue = require('vue');

let Myheader = require('./components/Myheader.vue');
let Myfooter = require('./components/Myfooter.vue');
let Home = require('./components/Home.vue');
let About = require('./components/About.vue');

const app = new Vue({
    el: '#app',
    components: {Myheader, Myfooter, Home, About}
});
