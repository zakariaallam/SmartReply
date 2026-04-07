<template>
  <div class="flex min-h-screen w-full bg-white text-[#0E0F12] font-sans">
    
    <!-- Left form area -->
    <div class="w-full lg:w-1/2 relative flex flex-col items-center justify-center min-h-screen">
      
      <!-- Top fixed back arrow -->
      <div class="absolute top-6 left-6 p-2 cursor-pointer hover:bg-gray-100 rounded-full transition" @click="$router.back()">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
      </div>

      <!-- Main Router Content for Auth step -->
      <div class="w-full max-w-[420px] px-4 md:px-0 mt-20 mb-20">
        <router-view></router-view>
      </div>

      <!-- Footer links -->
      <div class="absolute bottom-6 w-full flex justify-center space-x-6 text-[13px] font-medium text-blue-600">
        <a href="#" class="flex items-center space-x-1 hover:underline">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
          <span>français (FR)</span>
        </a>
        <a href="#" class="flex items-center space-x-1 hover:underline">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
          <span>Aide et assistance</span>
        </a>
      </div>
    </div>

    <!-- Right image area -->
    <div class="hidden lg:block w-1/2 h-screen fixed right-0 top-0">
      <img src="https://images.unsplash.com/photo-1542385151-efd9000785a0?w=1200&q=80" alt="Person" class="w-full h-full object-cover" />
    </div>

  </div>
</template>

<script setup>
</script>
