<template>
  <div class="w-full text-center">
    <h1 class="text-[22px] font-bold text-[#0E0F12] mb-3">zakariaApp pour les clients</h1>
    <p class="text-[14px] text-gray-500 leading-snug mb-8">
      Créez un compte ou connectez-vous pour réserver et gérer vos rendez-vous.
    </p>

    <div class="space-y-4 mb-8">
      <button class="w-full flex items-center justify-center border border-gray-200 hover:border-gray-300 rounded-full py-3 transition hover:shadow-sm">
        <svg class="w-5 h-5 text-blue-600 mr-3" viewBox="0 0 24 24" fill="currentColor"><path d="M17.525 8h-3v-1.5c0-1.036.634-1.5 1.5-1.5h1.5V2h-3c-1.933 0-3.5 1.567-3.5 3.5V8h-2v3h2v11h3V11h2.5l.5-3z"></path></svg>
        <span class="font-bold text-[15px]">Continuer avec Facebook</span>
      </button>

      <button @click="loginWithGoogle" class="w-full flex items-center justify-center border border-gray-200 hover:border-gray-300 rounded-full py-3 transition hover:shadow-sm">
        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="currentColor"><path fill="#4285F4" d="M23.745 12.27c0-.79-.07-1.54-.19-2.27h-11.3v4.51h6.47c-.29 1.48-1.14 2.73-2.4 3.58v3h3.86c2.26-2.09 3.56-5.17 3.56-8.82z"/><path fill="#34A853" d="M12.255 24c3.24 0 5.95-1.08 7.93-2.91l-3.86-3c-1.08.72-2.45 1.16-4.07 1.16-3.13 0-5.78-2.11-6.73-4.96h-4v3.09C3.515 21.3 7.565 24 12.255 24z"/><path fill="#FBBC05" d="M5.525 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.62h-4c-.83 1.66-1.31 3.5-1.31 5.38 0 1.88.48 3.72 1.31 5.38l4-3.09z"/><path fill="#EA4335" d="M12.255 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C18.205 1.19 15.495 0 12.255 0 7.565 0 3.515 2.7 1.525 6.62l4 3.09c.95-2.85 3.6-4.96 6.73-4.96z"/></svg>
        <span class="font-bold text-[15px]">Continuer avec Google</span>
      </button>
    </div>

    <div class="relative flex py-5 items-center mb-4">
      <div class="flex-grow border-t border-gray-100"></div>
      <span class="flex-shrink-0 mx-4 text-gray-300 text-[11px] font-medium tracking-wider uppercase">ou</span>
      <div class="flex-grow border-t border-gray-100"></div>
    </div>

     <form @submit.prevent="loginuser">

      <p class="bg-red-300 text-center mb-2 text-red-500">{{ error }}</p>
      <div class="mb-4">
      <input type="email" v-model="form.email" placeholder="Adresse e-mail" class="w-full border border-gray-200 rounded-lg px-4 py-3.5 outline-none focus:border-black transition text-[15px]" />
    </div>

       <div class="mb-4">
        <input v-model="form.password" type="password" placeholder="Password"
          class="w-full border border-gray-200 rounded-lg px-4 py-3.5 outline-none focus:border-black transition text-[15px]" />
        </div>

        <button class="w-full bg-[#0E0F12] hover:bg-black text-white font-bold rounded-full cursor-pointer py-4 transition mb-6 text-[15px]" >
      Login
    </button>

        <p class="text-center text-sm mb-6">
          Don't have an account?
          <router-link to="/auth" class="text-blue-500 font-semibold">
            Register
          </router-link>
        </p>

      </form>

    <!-- <div class="text-[13px]">
      <span class="font-bold">Vous avez un compte professionnel ?</span><br/>
      <a href="#" class="text-blue-600 hover:underline">Connectez-vous en tant que professionnel</a>
    </div> -->
  </div>
</template>

<script setup>
import { reactive , ref } from 'vue'
import { useRouter } from 'vue-router'
import { login } from '@/services/Auth'

const form = reactive({
  email: '',
  password: '',
})

const error = ref('')

const router = useRouter()

const loginWithGoogle = () => {
  try{
    // const google = await api.get('/auth/redirect/google')
   window.location.href = "http://localhost/api/auth/redirect/google "
  }catch(err){
    console.log(err)
  }
}

const loginuser = async () => {


  const success = await login(form)

  if(success.status){
    if(success.user.role_id == 3){
      router.push('/')
    }else if(success.user.role_id == 2){
       router.push('/business-home')
    }
  }

}
</script>
