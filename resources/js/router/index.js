
import { createRouter, createWebHistory } from 'vue-router'


import JoinusPage from '../views/JoinusPage.vue'
import SigninPage from '../views/SigninPage.vue'
import Main from '../views/Main.vue'
import Footer from '../components/Footer.vue'
import SignIn from '../components/SignIn.vue'



const routes = [
  {
    path: '/joinuspage',
    name: 'JoinusPage',
    component: JoinusPage
  },
  {
    path: '/signinpage',
    name: 'signinpage',
    component: SigninPage
  },
  {
    path: '/main',
    name: 'home',
    component: Main
  },

]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// const app = new Vue({
//   router,
//   methods: {
//     changeRoute(route) {
//       // `route` is either a string or object
//       router.push(route);
//     }
//   }})

export default router