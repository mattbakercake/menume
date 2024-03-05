import { createRouter, createWebHistory } from "vue-router";

import MainLayout from './Layouts/MainLayout.vue';

const routes = [
    {
        path: "/",
        meta: {layout: MainLayout},
        component: () => import('./Pages/ListAllReceipes.vue'),
    },
    {
        path: "/receipe/:id",
        meta: { layout: MainLayout },
        component: () => import('./Pages/ShowReceipe.vue'),
        props: true,
        name: 'receipeDetail'
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
