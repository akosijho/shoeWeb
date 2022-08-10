
import { createRouter, createWebHistory } from 'vue-router'



import JoinusPage from '../views/JoinusPage.vue'
import Footer from '../components/Footer.vue'
import SignIn from '../components/SignIn.vue'



const routes = [
  {
    path: '/',
    name: 'JoinusPage',
    component: JoinusPage
  },
  {
    path: '/footer',
    name: 'Footer',
    component: Footer
  },
  {
    path: '/signin',
    name: 'signin',
    component: SignIn
  },
  

]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes
})

export default router