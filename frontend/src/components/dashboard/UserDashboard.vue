<template>
  <div>
    <h1 class="text-2xl font-bold mb-6">My Dashboard</h1>

    <div class="grid grid-cols-3 gap-4">
      <StatCard title="Services" :value="data.services" />
      <StatCard title="Messages" :value="data.messages" />
      <StatCard title="Appointments" :value="data.appointments" />
    </div>
  </div>
</template>

<script setup>
import StatCard from './StatCard.vue'

defineProps({
  data: Object
})
</script>
