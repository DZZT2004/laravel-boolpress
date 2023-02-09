require('./bootstrap');

import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router';
import PageHome from './pages/PageHome'
import PageAbout from './pages/PageAbout'
import PagePost from './pages/PagePost'
import PagePosts from './pages/PagePosts'

Vue.use(VueRouter);

const router = new VueRouter({
    router: [
        {
            path: '/',
            name: 'home',
            component: PageHome,
        },
        {
            path: '/about',
            name: 'about',
            component: PageAbout,
        },
        {
            path: '/posts/parametro',
            name: 'postsShow',
            component: PagePost,
        },
        {
            path: '/posts',
            name: 'postsIndex',
            component: PagePosts,
        },
    ]
})

new Vue({
    el: '#root',
    render: h => h(App),
    router,

})