<template>
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 to-gray-100">
    
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

      <h2 class="text-2xl font-bold text-center mb-2">Welcome Back</h2>
      <p class="text-gray-500 text-center mb-6">
        Login to your account
      </p>

      <form @submit.prevent="login">

        <input v-model="form.email" type="email" placeholder="Email"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <input v-model="form.password" type="password" placeholder="Password"
          class="w-full border rounded-lg p-3 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <button
          class="w-full bg-blue-500 text-white p-3 rounded-lg mt-2 hover:bg-blue-600 transition">
          Login
        </button>

        <p class="text-center text-sm mt-4">
          Don't have an account?
          <router-link to="/register" class="text-blue-500 font-semibold">
            Register
          </router-link>
        </p>

      </form>

    </div>

  </div>
</template>

<script setup>
import { reactive } from 'vue'
import { useRouter } from 'vue-router'
import api from '@/services/api'

const form = reactive({
  email: '',
  password: ''
})

const router = useRouter()

const login = async () => {

  try {

    const res = await api.post('/login', form)

    localStorage.setItem('token', res.data.token)

    router.push('/')
    console.log(res.data)

  } catch (err) {

    console.log(err.response.data)

  }

}
</script>
