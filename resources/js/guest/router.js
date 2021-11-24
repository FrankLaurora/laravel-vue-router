import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Home from './pages/Home';
import About from './pages/About';
import Contacts from './pages/Contacts';
import Error_404 from './pages/Error_404';

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/*',
            name: 'error_404',
            component: Error_404
        },
    ]
});

export default router;