<script setup>
import { onMounted } from 'vue'
import api from '@/services/api'
import { authState } from '@/store'

onMounted(async () => {
  try {
    const res = await api.get('/user')
    authState.isLoggedIn = true
    authState.user = res.data
    console.log(res.data)
  } catch (e) {
    authState.isLoggedIn = false
  }
})
</script>

<template>
  <router-view />
</template>

<style scoped></style>


