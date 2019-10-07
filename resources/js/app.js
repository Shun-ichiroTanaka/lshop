/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
window.Vue = require('vue');


// import VueRouter from 'vue-router'
// Vue.use(VueRouter);

// import VuePageTransition from 'vue-page-transition'
// Vue.use(VuePageTransition)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('language-switcher', require('./components/Transition.vue').default);


// vue-routerのインスタンス化、オプションroutesでアクセスされるパスとその時に表示するComponentを指定
// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         // TOPページ
//         { path: '/', component: require('./components/Articles/Index.vue') },
//         // 記事投稿フォームページ
//         { path: '/article/create', component: require('./components/Articles/Create.vue') },
//     ]
// });


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// const app = new Vue({
//     router,
//     el: '#app',
// });
