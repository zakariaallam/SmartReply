import { createRouter, createWebHistory } from 'vue-router'
import DashboardView from '../views/DashboardView.vue'
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path : '/',
      name : 'dashboard',
      component : DashboardView,
    },
    {
      path : '/login',
      name : 'login',
      component : Login,
    },
    {
      path : '/register',
      name : 'register',
      component : Register,
    }
  ],
})

export default router
