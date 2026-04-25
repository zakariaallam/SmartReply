<template>
  <nav class="flex items-center justify-between px-4 md:px-8 py-4 bg-white sticky top-0 z-50 shadow-sm">
    <div class="flex items-center">
      <router-link to="/" class="text-3xl font-bold tracking-tighter cursor-pointer lowercase no-underline text-[#0E0F12]">SmartReplay</router-link>
    </div>
    
    <div class="hidden md:flex flex-1 mx-8 border border-gray-200 rounded-full items-center p-1" v-if="authState.isLoggedIn">
      <div class="flex-1 flex items-center px-4 border-r border-gray-200">
        <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <input type="text" placeholder="Tous les soins" class="w-full text-sm outline-none" />
      </div>
      <div class="flex-1 flex items-center px-4 border-r border-gray-200">
        <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
        <input type="text" placeholder="Position actuelle" class="w-full text-sm outline-none" />
      </div>
      <div class="flex-1 flex items-center px-4">
        <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <input type="text" placeholder="Heure" class="w-full text-sm outline-none" />
      </div>
      <button @click="$router.push('/search')" class="bg-[#0E0F12] hover:bg-black text-white p-2.5 rounded-full transition ml-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      </button>
    </div>

    <div class="hidden md:flex items-center space-x-6 text-sm font-medium">
      <router-link v-if="!authState.isLoggedIn" to="/auth/login" class="hover:text-gray-600 transition">Se connecter</router-link>      
      <ProfileDropdown v-if="authState.isLoggedIn" />
      <button v-else class="border border-gray-200 rounded-full px-5 py-2 flex items-center space-x-2 hover:bg-gray-50 transition border-opacity-70">
        <span>Menu</span>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
      </button>
    </div>
  </nav>
</template>

<script setup>
import ProfileDropdown from '../ProfileDropdown.vue'
import { authState } from '../../store.js'
</script>
