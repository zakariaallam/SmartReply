<template>
  <div class="relative w-full pt-16 pb-24 px-4 overflow-hidden rounded-b-[40px] flex flex-col items-center justify-center text-center">
    <!-- Gradient Background -->
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#FFF2FD]/80 via-[#F3E5FF]/90 to-[#E6EBFF] opacity-90 backdrop-blur-3xl"></div>

    <div class="relative z-10 max-w-4xl pt-8">
      <h1 class="text-4xl md:text-[56px] font-bold leading-[1.05] tracking-tight mb-4 text-[#0E0F12]">
        Réservez des prestations<br/>de beauté et de bien-<br/>être près de chez vous
      </h1>
      <p class="text-[17px] md:text-[19px] text-gray-700 leading-snug mt-6 mb-12 max-w-[800px] mx-auto">
        Découvrez les salons, barbiers, spas médicaux, studios de bien-être et experts en beauté les mieux notés, approuvés par des millions de personnes dans le monde.
      </p>

      <!-- Search Bar -->
      <div ref="searchBarRef" class="relative mx-auto w-full max-w-4xl bg-white rounded-full flex flex-col md:flex-row items-center p-2 shadow-xl mb-8 border border-gray-100">
        
        <!-- Input 1: Treatments -->
        <div  class="relative flex-1 flex items-center px-4 py-2 w-full border-b md:border-b-0 md:border-r border-gray-100 cursor-pointer hover:bg-gray-50/50 rounded-l-full transition">
          <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          <input type="text" v-model="treatmentSearch.tous" placeholder="Tous les soins" class="w-full bg-transparent outline-none text-[15px] font-semibold text-[#0E0F12] placeholder-gray-500">
        </div>

        <!-- Input 2: Location -->
        <div @click="toggleDropdown('location')" class="relative flex-1 flex items-center px-4 py-2 w-full border-b md:border-b-0 md:border-r border-gray-100 cursor-pointer hover:bg-gray-50/50 transition">
          <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          <input type="text" v-model="treatmentSearch.location" placeholder="Position actuelle" class="w-full bg-transparent outline-none text-[15px] font-semibold text-[#0E0F12] placeholder-gray-500">
        </div>

        <!-- Input 3: Time/Date -->
        <div @click="toggleDropdown('time')" class="relative flex-1 flex items-center px-4 py-2 w-full cursor-pointer hover:bg-gray-50/50 transition">
          <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          <input type="text" v-model="treatmentSearch.time" placeholder="Heure" class="w-full bg-transparent outline-none text-[15px] font-semibold text-[#0E0F12] placeholder-gray-500">
        
          <!-- Date/Time Dropdown -->
          <div v-if="activeDropdown === 'time'" class="absolute top-full right-0 mt-4 w-[600px] bg-white rounded-[24px] shadow-2xl border border-gray-100 z-50 p-8 text-left animate-in fade-in slide-in-from-top-2 duration-200 flex">
             <!-- Left side: Presets -->
             <div class="w-40 border-r border-gray-100 pr-6 space-y-2">
                <button @click.stop="selectedTime = 'Aujourd\'hui'" class="w-full text-left px-4 py-4 rounded-xl font-bold bg-white border border-gray-200 hover:border-black transition" :class="selectedTime === 'Aujourd\'hui' ? 'bg-gray-50 border-black ring-1 ring-black' : ''">
                  <span class="block text-[15px]">Aujourd'hui</span>
                  <span class="block text-[12px] text-gray-500 font-medium">dim. 5 avr.</span>
                </button>
                <button @click.stop="selectedTime = 'Demain'" class="w-full text-left px-4 py-4 rounded-xl font-bold bg-white border border-gray-200 hover:border-black transition" :class="selectedTime === 'Demain' ? 'bg-gray-50 border-black ring-1 ring-black' : ''">
                  <span class="block text-[15px]">Demain</span>
                  <span class="block text-[12px] text-gray-500 font-medium">lun. 6 avr.</span>
                </button>
             </div>

             <!-- Right side: Calendar & Filters -->
             <div class="flex-1 pl-8">
                <div class="flex items-center justify-between mb-8">
                   <button class="p-1 hover:bg-gray-100 rounded-full transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                   <span class="font-bold text-[15px]">avr. 2026</span>
                   <button class="p-1 hover:bg-gray-100 rounded-full transition"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                </div>

                <div class="grid grid-cols-7 gap-y-4 text-center mb-8">
                   <span v-for="d in days" :key="d.day" class="text-[12px] font-medium text-gray-500">{{ d.day }}</span>
                   <span v-for="i in 4" :key="'blank'+i"></span> <!-- Padding for start of month -->
                   <button v-for="day in currentMonthDays" :key="day" 
                     @click.stop="selectedTime = day + ' avr.'"
                     class="w-10 h-10 flex items-center justify-center rounded-full text-[14px] font-bold transition mx-auto"
                     :class="[day === 5 ? 'bg-[#0E0F12] text-white ring-4 ring-black/5' : 'hover:bg-gray-50', selectedTime.split(' ')[0] == day ? 'ring-2 ring-[#0E0F12] ring-offset-2' : '']">
                     {{ day }}
                   </button>
                </div>

                <div class="border-t border-gray-100 pt-6">
                   <h5 class="font-bold text-[14px] mb-4">Sélectionnez l'heure</h5>
                   <div class="flex flex-wrap gap-2">
                      <button @click.stop="selectedTime = 'Heure'" class="px-4 py-2 rounded-full border border-[#6A35FF] bg-[#F9F6FF] text-[#6A35FF] font-bold text-[13px]" :class="selectedTime === 'Heure' ? 'ring-2 ring-violet-200' : ''">Heure</button>
                      <button @click.stop="selectedTime = 'Matin 09h - 12h'" class="px-4 py-2 rounded-full border border-gray-100 font-bold text-[13px] hover:border-gray-300" :class="selectedTime.includes('Matin') ? 'bg-gray-50 border-black ring-1 ring-black' : ''">Matin <span class="ml-1 opacity-50 font-medium">09h - 12h</span></button>
                   </div>
                </div>
             </div>
          </div>
        </div>

        <!-- Primary Button -->
        <button @click="handleSearch" class="bg-[#0E0F12] hover:bg-black text-white w-full md:w-auto font-bold rounded-full px-10 py-4 transition active:scale-95 shadow-lg ml-2">
          Rechercher
        </button>
      </div>

      <!-- Stats text -->
      <div class="mt-8 mb-12">
        <p class="text-[15px] font-medium text-gray-900"><span class="font-bold">437 598</span> rendez-vous pris aujourd'hui</p>
      </div>

      <!-- App Download Prompt -->
      <button class="bg-white hover:bg-gray-50 text-[#0E0F12] shadow-sm font-medium rounded-full px-6 py-3 transition text-sm flex items-center mx-auto space-x-2">
        <span>Télécharger l'app</span>
        <svg fill="currentColor" viewBox="0 0 16 16" class="w-4 h-4"><path d="M4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2zm1 0h6v1H5V3zm-1 3v6h8V6H4zm2 2h4v2H6V8z"/></svg>
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()
const activeDropdown = ref(null) 
const treatmentSearch = ref({
  tous: '',
  location: '',
  time: ''
})
const locationSearch = ref('')
const selectedTime = ref('')

const toggleDropdown = (name) => {
  if (activeDropdown.value === name) activeDropdown.value = null
  else activeDropdown.value = name
}

const closeDropdowns = () => {
  activeDropdown.value = null
}

const handleSearch = () => {
  router.push({
    path: '/search',
    query: {
      q: treatmentSearch.value,
      location: locationSearch.value,
      time: selectedTime.value
    }
  })
}

// Click outside logic
const searchBarRef = ref(null)
const handleClickOutside = (event) => {
  if (searchBarRef.value && !searchBarRef.value.contains(event.target)) {
    closeDropdowns()
  }
}

onMounted(() => {
  document.addEventListener('click', handleClickOutside)
})

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside)
})

// Calendar Logic (Mockup)
const days = [
  { date: 1, day: 'lun.' }, { date: 2, day: 'mar.' }, { date: 3, day: 'mer.' },
  { date: 4, day: 'jeu.' }, { date: 5, day: 'ven.' }, { date: 6, day: 'sam.' }, { date: 7, day: 'dim.' }
]
// Simplified calendar for demo
const currentMonthDays = Array.from({ length: 30 }, (_, i) => i + 1)
</script>
