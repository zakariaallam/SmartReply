import { createRouter, createWebHistory } from 'vue-router'
import DashboardView from '@/views/DashboardView.vue'

const routes = [
  { path: '/', component: DashboardView },
 
  { 
    path: '/auth', 
    component: () => import('../layouts/AuthLayout.vue'),
    children: [
      { path: '', name: 'auth-selection', component: () => import('../views/Auth/AuthSelection.vue') },
      { path: 'login', name: 'login', component: () => import('../views/Auth/Login.vue') },
      { path: 'register', name: 'register', component: () => import('../views/Auth/Register.vue') }
    ]
  }
]

export const router = createRouter({
  history: createWebHistory(),
  routes
})
