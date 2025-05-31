import { createApp } from 'vue';
import router from './router/index.js'; // import router
import App from './App.vue'; // main app component

const app = createApp(App);

app.use(router);

app.mount('#app');