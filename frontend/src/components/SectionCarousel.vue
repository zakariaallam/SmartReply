<template>
  <div class="w-full py-12 px-4 md:px-8 relative">
    <div class="max-w-[1200px] mx-auto relative">
      <h2 class="text-[28px] font-bold text-[#0E0F12] mb-6 text-left">{{ title }}</h2>
      
      <!-- Carousel container -->
      <div 
        class="flex space-x-6 overflow-x-auto pb-6 scrollbar-hide scroll-smooth"
        style="scrollbar-width: none; -ms-overflow-style: none;"
      >
        <slot></slot>
      </div>

      <!-- Arrow Button (Right) -->
      <button class="absolute top-1/2 right-0 md:-right-6 -translate-y-1/2 bg-white w-12 h-12 rounded-full shadow-lg border border-gray-100 flex items-center justify-center text-gray-900 hover:bg-gray-50 transition z-10 opacity-0 md:opacity-100 placeholder-hide pointer-events-none md:pointer-events-auto">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
      </button>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: { type: String, required: true }
})
</script>

<style scoped>
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
