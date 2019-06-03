import Vue from 'vue';
import VueRouter from 'vue-router';

import NavBar from "./components/NavBar"

Vue.use(VueRouter)

const router = new VueRouter({
    routes : [
        {
            path: "/login",
            component: NavBar
        }
    ]
})

export default router
