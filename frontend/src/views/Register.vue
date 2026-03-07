<template>
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-gray-100">
    
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

      <h2 class="text-2xl font-bold text-center mb-2">Create Your Account</h2>
      <p class="text-gray-500 text-center mb-6">
        Start managing your business messages
      </p>

      <form @submit.prevent="register">

        <input v-model="form.business_name" type="text" placeholder="Business Name"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <div class="flex gap-2">
          <input v-model="form.first_name" type="text" placeholder="First Name"
            class="w-1/2 border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          <input v-model="form.last_name" type="text" placeholder="Last Name"
            class="w-1/2 border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>

        <input v-model="form.email" type="email" placeholder="Email"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <input v-model="form.password" type="password" placeholder="Password"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
          
        <input v-model="form.password_confirmation" type="password" placeholder="Confirmation Password"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <button
          class="w-full bg-blue-500 text-white p-3 cursor-pointer rounded-lg mt-2 hover:bg-blue-600 transition">
          Create Account
        </button>

        <p class="text-center text-sm mt-4">
          Already have an account?
          <router-link to="/login" class="text-blue-500 font-semibold">
            Login
          </router-link>
        </p>

      </form>

    </div>

  </div>
</template>

<script setup>
import { reactive } from 'vue'
import api from '@/services/api'

const form = reactive({
  business_name: '',
  first_name: '',
  last_name: '',
  email: '',
  password: '',
  password_confirmation: ''
})

const register = async () => {

  try {

    const res = await api.post('/register', form)

    console.log(res)

  } catch (error) {

    console.log(error.response.data)

  }

}
</script>
