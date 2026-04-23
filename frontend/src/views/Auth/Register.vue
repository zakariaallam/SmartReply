<template>
  <div class="w-full">
    <h1 class="text-2xl font-bold text-[#0E0F12] mb-3 text-center">Créer un compte</h1>
    <p class="text-[15px] text-gray-500 leading-snug mb-8 text-center max-w-[320px] mx-auto">
      C'est presque fini ! Créez votre nouveau compte pour l'adresse  en remplissant les renseignements demandés
    </p>

    <form class="space-y-5" @submit.prevent="register">
      
      <!-- Prénom -->
      <div class="flex flex-col text-left">
        <label class="font-bold text-[14px] mb-1">Prénom *</label>
        <input v-model="form.first_name" type="text" class="border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
      </div>

      <!-- Nom de famille -->
      <div class="flex flex-col text-left">
        <label class="font-bold text-[14px] mb-1">Nom de famille *</label>
        <input v-model="form.last_name" type="text" class="border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
      </div>
   
      <!-- Email -->
      <div class="flex flex-col text-left">
        <label class="font-bold text-[14px] mb-1">Email *</label>
        <input v-model="form.email" type="text" class="border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
      </div>

      <!-- Mot de passe -->
      <div class="flex flex-col text-left relative">
        <label class="font-bold text-[14px] mb-1">Mot de passe *</label>
        <div class="relative">
          <input v-model="form.password" type="password" class="w-full border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
          <svg class="w-5 h-5 absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
        </div>
      </div>
      <!-- confirmation Mot de passe -->
      <div class="flex flex-col text-left relative">
        <label class="font-bold text-[14px] mb-1">confirmé Mot de passe *</label>
        <div class="relative">
          <input v-model="form.password_confirmation" type="password" class="w-full border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
          <svg class="w-5 h-5 absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
        </div>
      </div>

      <!-- Numéro de portable -->
      <div class="flex flex-col text-left">
        <label class="font-bold text-[14px] mb-1">Numéro de portable *</label>
        <div class="flex space-x-3">
          <div class="relative w-[100px]">
            <select class="w-full border border-gray-200 rounded-lg px-4 py-3 bg-white appearance-none outline-none focus:border-black transition text-[15px]">
              <option>+212</option>
            </select>
            <svg class="w-4 h-4 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </div>
          <input v-model="form.phone" type="tel" class="flex-grow border border-gray-200 rounded-lg px-4 py-3 outline-none focus:border-black transition text-[15px]" />
        </div>
      </div>

      <!-- Submit -->
      <button class=" cursor-pointer w-full bg-[#0E0F12] hover:bg-black text-white font-bold rounded-full py-4 mt-6 transition text-[15px]">
        Continuez
      </button>

    </form>
  </div>
</template>

<script setup>
import { reactive } from 'vue'
import { useRouter } from 'vue-router'
import api from '@/services/api'

const form = reactive({
  // business_name: '',
  phone: '',
  first_name: '',
  last_name: '',
  email: '',
  password: '',
  password_confirmation: ''
})

const route = useRouter()

const register = async () => {

  try {

    const res = await api.post('/register', form)
    console.log(res)
    
    if(res.data.success){
      route.push('/auth/login')
    }else{
      alert(res.data.message)
    }
  } catch (error) {

    console.log(error.response.data)

  }

}
</script>
