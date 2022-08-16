import './bootstrap';

import { createApp } from 'vue';

// import router from './router';

import Main from './views/Main.vue';
import router from './router';

createApp(Main).use(router).mount("#app")

