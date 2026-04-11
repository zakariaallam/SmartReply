<template>

     <!-- Top Header -->
      <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between pl-6 pr-4 shrink-0 grow-0">
        <!-- Brand fresha-->
        <div class="flex items-center ">
          <!-- Fresha text logo -->
          <span class="text-2xl font-bold tracking-tight z-50 absolute pointer-events-none" style="left:12px; margin-top:-2px">SmartReplay</span>
        </div>

        <!-- Right User Navigation -->
        <div class="flex items-center gap-4">
          <button class="bg-[#6b4cff] hover:bg-indigo-600 text-white px-4 py-2 rounded-full font-medium text-sm transition-colors flex items-center gap-2">
            Poursuivre la configuration 
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </button>
          
          <button class="text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
          
          <button class="text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
            </svg>
          </button>
          
          <button class="text-gray-500 hover:text-gray-700 relative">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span class="absolute top-0 right-0 w-4 h-4 bg-red-500 text-white text-[10px] rounded-full flex items-center justify-center font-bold">3</span>
          </button>

          <!-- Profile Dropdown Container -->
          <div class="relative ml-2">
            <button @click="showProfileMenu = !showProfileMenu" class="w-9 h-9 rounded-full bg-blue-100 text-blue-800 font-bold flex items-center justify-center">
               {{ userInitials }}
            </button>
            
            <!-- Menu Popup -->
            <div v-if="showProfileMenu" class="absolute right-0 top-12 w-64 bg-white border border-gray-200 shadow-xl rounded-xl py-3 px-4 z-50 text-sm">
              <div class="flex items-center gap-3 border-b border-gray-100 pb-3 mb-2">
                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-800 font-bold flex items-center justify-center shrink-0">
                  {{ userInitials }}
                </div>
                <div>
                  <div class="font-bold">{{ userName }}</div>
                  <div class="text-gray-400 text-xs">Aucun avis pour le moment</div>
                </div>
              </div>
              
              <div class="bg-yellow-50 rounded-lg p-3 mb-3 border border-yellow-100 cursor-pointer hover:bg-yellow-100 transition-colors flex justify-between items-center group">
                <div>
                  <div class="font-bold text-gray-900">Vérifiez votre adresse e-mail</div>
                  <div class="text-gray-600 text-xs">Sécurisez votre compte</div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 group-hover:text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
              </div>

              <ul class="space-y-1">
                <li><a href="#" class="block px-2 py-2 hover:bg-gray-50 rounded text-gray-700">Mon profil</a></li>
                <li><a href="#" class="block px-2 py-2 hover:bg-gray-50 rounded text-gray-700">Paramètres personnels</a></li>
                <hr class="my-1 border-gray-100">
                <li><a href="#" class="block px-2 py-2 hover:bg-gray-50 rounded text-gray-700">Aide et assistance</a></li>
                <li><a href="#" class="block px-2 py-2 hover:bg-gray-50 rounded text-gray-700">Français FR</a></li>
                <li><button @click="logoutAction" class="w-full text-left px-2 py-2 hover:bg-gray-50 rounded text-gray-700">Déconnexion</button></li>
              </ul>
            </div>
            
            <!-- Clickaway listener -->
            <div v-if="showProfileMenu" @click="showProfileMenu = false" class="fixed inset-0 z-40"></div>
          </div>
        </div>
      </header>

      
  <div class="h-screen w-full flex bg-gray-50 text-gray-900 font-sans overflow-hidden">
    
    <!-- Sidebar -->
    <aside class="w-[70px] bg-[#1a1a1a] flex flex-col items-center py-4 relative z-20 shadow-xl shrink-0">      
      <!-- Navigation Icons -->
      <nav class="flex-grow flex flex-col items-center gap-4 w-full">
        <!-- Home -->
        <router-link to="/business/home" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white" 
          :class="$route.path.includes('/business/home') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
          </svg>
        </router-link>

        <!-- Calendar -->
        <router-link to="/business/calendar" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/calendar') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </router-link>

        <!-- Sales (Tag) -->
        <router-link to="/business/sales" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/sales') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
          </svg>
        </router-link>

        <!-- Clients (Smiley) -->
        <router-link to="/business/clients" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/clients') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </router-link>

        <!-- Catalog (Book) -->
        <router-link to="/business/catalog" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/catalog') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
          </svg>
        </router-link>

        <!-- Team (User) -->
        <router-link to="/business/team" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/team') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
          </svg>
        </router-link>

        <!-- Marketing (Megaphone) -->
        <a href="#" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
          </svg>
        </a>

        <!-- Reports (Chart) -->
        <a href="#" class="w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
          </svg>
        </a>

        <!-- Hours (Clock) -->
        <router-link to="/business/hours" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/hours') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </router-link>

        <!-- Photos (Camera) -->
        <router-link to="/business/photos" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/photos') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </router-link>

        <!-- Settings (Gear) -->
        <router-link to="/business/settings" 
          class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors relative"
          active-class="bg-[#6b4cff] text-white"
          :class="$route.path.includes('/business/settings') ? 'bg-[#6b4cff] text-white' : 'text-gray-400 hover:text-white'">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </router-link>
      </nav>

      <!-- Help (Question) -->
      <a href="#" class="mt-auto w-11 h-11 rounded-xl flex items-center justify-center text-gray-400 hover:text-white transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </a>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col relative z-10 min-w-0">

      <!-- Page Component injected here! -->
      <div class="flex-grow overflow-auto relative">
        <router-view></router-view>
      </div>

    </div>
  </div>
</template>


<script setup>
import { logout } from '@/services/Auth.js';
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import { computed } from 'vue'
import { authState } from '@/store'

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

const router = useRouter();
const showProfileMenu = ref(false);

const logoutAction = async () => {
    await logout();
    router.push('/');
};
</script>
