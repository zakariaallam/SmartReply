<template>
  <div class="relative group">
    <!-- User Avatar Button -->
    <button @click="open = !open"
       class="bg-[#F2F2FF] text-blue-600 font-bold border border-[#EBEBF4] rounded-full px-3 py-2 flex items-center space-x-2 transition cursor-pointer">
      <span class="text-[13px] tracking-wide">{{ userInitials }}</span>
      <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </button>

    <!-- Dropdown Menu -->
    <div v-if="open" 
        class="absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-lg border border-gray-100 transition duration-200 z-50 overflow-hidden text-left">
      <div class="p-4 bg-white border-b border-gray-100">
        <h4 class="font-bold text-[15px] text-[#0E0F12] truncate">{{ userName }}</h4>
      </div>
      
      <div class="p-2 border-b border-gray-100">
        <router-link to="/dashboard/profile" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
          Profil
        </router-link>
        <router-link to="/dashboard/activity" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          Activité
        </router-link>
        <router-link to="/dashboard/wallet" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
          Portefeuille
        </router-link>
        <router-link to="/dashboard/favorites" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          Favoris
        </router-link>
        <router-link to="/dashboard/forms" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
          Formulaires
        </router-link>
        <router-link to="/dashboard/orders" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
          Commandes de produits
        </router-link>
        <router-link to="/dashboard/settings" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          Paramètres
        </router-link>
        <button @click="handleLogout" class="cursor-pointer w-full text-left flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <span class="ml-8">Déconnexion</span>
        </button>
      </div>

      <div class="p-2">
        <a href="#" class="block px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">Téléchargez l'app</a>
        <a href="#" class="block px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">Aide et assistance</a>
        <a href="#" class="flex items-center px-3 py-2.5 text-[14px] text-gray-700 hover:bg-gray-50 rounded-lg">
          <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
          français (FR)
        </a>
      </div>

      <div class="p-3 border-t border-gray-100 bg-gray-50">
        <a href="#" class="flex items-center justify-between text-[14px] text-[#0E0F12] font-semibold hover:underline">
          <span>Pour les professionnels</span>
          <span>→</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed , ref} from 'vue'
import { authState } from '@/store'
import { logout } from '@/services/Auth'
import { useRouter } from 'vue-router'

const open = ref(false)
const router = useRouter()
const userName = computed(() => {
  if (!authState.user) return ''
  return `${authState.user.first_name} ${authState.user.last_name}`
})


const userInitials = computed(() => {
  if (!authState.user) return ''

  const first = authState.user.first_name?.[0] || ''
  const last = authState.user.last_name?.[0] || ''

  return (first + last).toUpperCase()
})

const handleLogout = async () => {
    await logout();
    router.push('/');
};

</script>