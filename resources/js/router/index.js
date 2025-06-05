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
        component:  import('../pages/AboutUs.vue'),
    },
    {
        path: '/shade-cards',
        name: 'shade-cards',
        component:  import('../pages/ShadeCards.vue'),
    },
    {
        path: '/product/:slug',
        name: 'product',
        component:  import('../pages/Product.vue'),
    },
    {
        path: '/contact-us',
        name: 'contact-us',
        component:  import('../pages/ContactUs.vue'),
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        // Always scroll to top
        return { top: 0 };
      }
});

export default router;