import './bootstrap';

import { createApp } from 'vue';

// import router from './router';

import Page from './views/Page.vue';
import router from './router';

createApp(Page).use(router).mount("#app")

