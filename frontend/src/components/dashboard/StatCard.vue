<template>
  <div :class="cardClass" class="p-4 rounded shadow text-white">
    <h3 class="text-sm">{{ title }}</h3>
    <p class="text-2xl font-bold">{{ value }}</p>
  </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  title: String,
  value: String,
  color: String
})

const cardClass = computed(() => {
  if (props.color === 'blue') return 'bg-blue-500'
  if (props.color === 'green') return 'bg-green-500'
  if (props.color === 'purple') return 'bg-purple-500'
})
</script>
