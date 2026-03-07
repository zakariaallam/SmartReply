<template>
  <div>
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-3 gap-4">
      <StatCard title="Users" :value="data.users" />
      <StatCard title="Businesses" :value="data.businesses" />
      <StatCard title="Messages" :value="data.messages" />
    </div>
  </div>
</template>

<script setup>
import StatCard from './StatCard.vue'

defineProps({
  data: Object
})
</script>
