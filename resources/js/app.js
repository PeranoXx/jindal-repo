import { createApp } from 'vue';
import router from './router/index.js'; // import router
import App from './App.vue'; // main app component

import NumberAnimation from "vue-number-animation";

const app = createApp(App);

app.use(router);
app.component('NumberAnimation', NumberAnimation);

app.mount('#app');