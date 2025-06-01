import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: '/',
        name: 'home',
        component:  import('../pages/Home.vue'),
    },
    {
        path: '/about-us',
        name: 'about-us',
        component:  import('../pages/Home.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;