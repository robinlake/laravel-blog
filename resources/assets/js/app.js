// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */

require('./bootstrap');
// require('./particles/app');
// require('./particles/particles');
//require('particlesjs');

window.Vue = require('vue');


var SocialSharing = require('vue-social-sharing');
Vue.use(SocialSharing);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('program', require('./components/Program.vue'));
Vue.component('post', require('./components/posts/Post.vue'));


window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
};