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
      { path: 'register', name: 'register', component: () => import('../views/Auth/Register.vue') },
      { path: 'ownerRegister', name: 'ownerRegister', component: () => import('../views/Auth/OwnerRegister.vue')}
    ]
  },

  {
    path: '/business',
    component: () => import('../layouts/DashboardOwner.vue'),
    children:[
      {path: '' , redirect: '/business/home'},
      {path: 'home' , name: 'business-home' , component: () => import('../views/OwnerHomme.vue')},
      { path: 'calendar', component: () => import('../views/business/BusinessCalendar.vue') },
      {path: 'hours' , name: 'business-houre' , component: () => import('../views/business/BusineesHours.vue')},
      { path: 'team', name: 'business-team', component: () => import('../views/business/BusinessTeam.vue') },
      { path: 'sales', name: 'business-sales', component: () => import('../views/business/BusinessSales.vue') },
      { path: 'clients', name: 'business-clients', component: () => import('../views/business/BusinessClients.vue') },
      { path: 'catalog', name: 'business-catalog', component: () => import('../views/business/BusinessCatalog.vue') },
      { path: 'modules', name: 'business-modules', component: () => import('../views/business/BusinessModules.vue') },
      { path: 'photos', name: 'business-photos', component: () => import('../views/business/BusinessPhotos.vue') },
      { path: 'online-booking', name: 'business-booking', component: () => import('../views/business/BusinessOnlineBooking.vue') },
      { path: 'marketing/automations', component: () => import('../views/business/BusinessAutomations.vue') },
      { path: 'settings', component: () => import('../views/business/BusinessSettings.vue') },
      { path: 'reports', component: () => import('../views/business/BusinessReports.vue') }
    ]
  },

]

export const router = createRouter({
  history: createWebHistory(),
  routes
})
