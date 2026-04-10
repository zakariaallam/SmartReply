<template>
  <div class="w-full text-center">
    <h1 class="text-2xl font-bold text-[#0E0F12] mb-10">S'inscrire/se connecter</h1>

    <router-link to="/auth/register" class="flex flex-col items-start border border-gray-200 rounded-xl p-5 mb-4 hover:shadow-md hover:border-gray-300 transition group relative cursor-pointer no-underline text-left">
      <span class="font-bold text-[15px] mb-1">Fresha pour les clients</span>
      <span class="text-[13px] text-gray-500 pr-8">Prenez rendez-vous dans un salon ou un spa près de chez vous</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5 absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-black transition transform group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </router-link>

    <div class="flex flex-col items-start border border-gray-200 rounded-xl p-5 hover:shadow-md hover:border-gray-300 transition group relative cursor-pointer no-underline text-left">
      <span class="font-bold text-[15px] mb-1">Fresha pour les professionnels</span>
      <span class="text-[13px] text-gray-500 pr-8">Gérez et développez votre entreprise</span>
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5 absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-black transition transform group-hover:translate-x-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </div>
  </div>
</template>

<script setup>
</script>
