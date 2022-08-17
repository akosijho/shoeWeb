import { createApp } from 'vue';
import axios from 'axios'
import VueAxios from 'vue-axios'
import router from './router';
import JoinusPage from './views/JoinusPage.vue';
import Main from './views/Main.vue';

// import JoinUs from './components/JoinUs.vue';

// import Footer from './components/Footer.vue';'

// Vue.component("joinus",require('./components.JoinUs.vue'));

// const app = createApp(Joinus_Page)
// app.use(VueAxios, axios)
// app.mount('#app')


createApp(Main).use(router).use(VueAxios, axios).mount('#app')

// createApp(Main).mount("#app")

