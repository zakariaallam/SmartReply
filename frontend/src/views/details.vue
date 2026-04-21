<template>
  <div class="min-h-screen bg-white font-sans text-[#0E0F12]">
    <Navbar />

    <div v-if="loading" class="flex flex-col items-center justify-center min-h-[60vh]">
      <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-indigo-600 mb-4"></div>
      <p class="text-gray-500 font-medium">Chargement du detail...</p>
    </div>

    <div v-else-if="detail" class="max-w-[1200px] mx-auto px-4 md:px-8 py-8">
      
      <!-- Breadcrumbs -->
      <!-- <nav class="flex text-[13px] text-gray-500 mb-6 space-x-2 font-medium">
        <router-link to="/" class="hover:text-black">Accueil</router-link>
        <span>·</span>
        <span class="hover:text-black">{{ detail.category?.name || detail.category }}</span>
        <span>·</span>
        <span class="hover:text-black">{{ detail.city }}</span>
        <span>·</span>
        <span class="text-black font-semibold">{{ detail.name }}</span>
      </nav> -->

      <!-- Header -->
      <!-- <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
        <div>
          <h1 class="text-4xl md:text-[44px] font-bold tracking-tight mb-3">{{ detail.name }}</h1>
          <div class="flex items-center text-[15px]">
            <span class="font-bold mr-1">{{ detail.rating }}</span>
            <div class="flex text-[#FFB800] mr-2">
              <svg v-for="i in 5" :key="i" class="w-4 h-4" :fill="i <= Math.round(parseFloat(detail.rating)) ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            </div>
            <span class="text-gray-500 underline mr-2">({{ detail.reviews }})</span>
            <span class="text-gray-300 mx-1">•</span>
            <span class="text-green-600 font-medium mr-1">Ouvert</span>
            <span class="text-gray-300 mx-1">•</span>
            <span class="text-gray-500 mr-2">{{ detail.address }}, {{ detail.city }}</span>
          </div>
        </div> -->

        <!-- <div class="flex items-center space-x-3 mt-6 md:mt-0">
          <button class="w-10 h-10 border border-gray-200 rounded-full flex items-center justify-center hover:bg-gray-50 transition">
            <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
          </button>
          <button class="w-10 h-10 border border-gray-200 rounded-full flex items-center justify-center hover:bg-gray-50 transition">
            <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
          </button>
        </div>
      </div> -->

      <!-- Image Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:h-[450px] overflow-hidden rounded-2xl relative group">
        <!-- Large Main Image -->
        <div class="md:col-span-2 h-[300px] md:h-full bg-gray-100">
           <img :src="detail.business.cover_url" alt="Salon main" class="w-full h-full object-cover" />
        </div>
        <!-- Vertical Stacked Images
        <div class="hidden md:flex flex-col gap-3 h-full">
           <div v-for="(img, idx) in detail.images.slice(1, 3)" :key="idx" class="h-[50%] w-full bg-gray-100">
             <img :src="img" alt="Detail" class="w-full h-full object-cover" />
           </div>
           <button v-if="detail.images.length > 3" class="absolute bottom-4 right-4 bg-white hover:bg-gray-50 border border-gray-200 shadow-sm rounded-full px-4 py-2 text-[14px] font-semibold flex items-center space-x-2 transition">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
              <span>Afficher toutes les {{ detail.images.length }} images</span>
           </button>
        </div> -->
      </div>

      <!-- Tabs Navigation -->
      <div class="mt-12 border-b border-gray-200 sticky top-0 bg-white z-20">
        <nav class="flex space-x-8 overflow-x-auto scrollbar-hide">
          <button 
            v-for="tab in tabs" :key="tab.id"
            @click="activeTab = tab.id"
            class="py-4 text-[15px] font-semibold transition whitespace-nowrap border-b-2"
            :class="activeTab === tab.id ? 'border-black text-black' : 'border-transparent text-gray-500 hover:text-black'"
          >
            {{ tab.label }}
          </button>
        </nav>
      </div>

      <!-- Content Area -->
      <div class="flex flex-col lg:flex-row mt-8 gap-10 relative">
        
        <!-- Left Main Content -->
        <div class="flex-1 min-w-0">
          
          <!-- Tab: Prestations -->
          <div v-show="activeTab === 'prestations'">
            <h2 class="text-3xl font-bold mb-6">Prestations</h2>
            <div class="space-y-4">
              <div v-for="(svc, index) in detail.services" :key="index" class="p-4 border border-gray-100 bg-gray-50/50 hover:bg-white rounded-xl shadow-sm transition flex justify-between items-center group cursor-pointer">
                <div>
                  <h4 class="text-[15px] font-semibold text-gray-900 group-hover:text-blue-600 transition">{{ svc.name }}</h4>
                  <p class="text-[13px] text-gray-500 mt-1 mb-2">{{ svc.duration }}</p>
                  <p class="text-[14px] font-medium text-gray-800">{{ svc.price }}</p>
                </div>
                <button class="px-5 py-2.5 bg-white border border-gray-200 rounded-full text-[14px] font-semibold hover:border-black transition">
                  Réserver
                </button>
              </div>
            </div>
          </div>

          <!-- Tab: Equipe -->
          <div v-show="activeTab === 'equipe'">
            <h2 class="text-3xl font-bold mb-6">Équipe</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
              <div v-for="member in teamMembers" :key="member.id" class="flex flex-col items-center group">
                <div class="w-24 h-24 rounded-full bg-[#E8E8FF] text-[#6A35FF] flex items-center justify-center text-3xl font-bold mb-3 relative overflow-hidden group-hover:ring-2 ring-gray-200 transition">
                  <img v-if="member.profile_image_url" :src="member.profile_image_url" class="w-full h-full object-cover"/>
                  <span v-else>{{ member.name.charAt(0) }}</span>
                </div>
                <p class="text-[14px] font-medium text-gray-900 text-center">{{ member.name }}</p>
                <p class="text-[12px] text-gray-500 text-center">{{ member.description || 'Expert' }}</p>
              </div>
            </div>
          </div>

          <!-- Tab: À propos -->
          <!-- <div v-show="activeTab === 'apropos'">
            <h2 class="text-3xl font-bold mb-6">À propos</h2>
            <p class="text-[15px] text-gray-700 leading-relaxed mb-6">{{ detail.description || 'Biendetail dans notre établissement.' }}</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
               <div>
                  <h3 class="text-xl font-bold mb-4">Horaires d'ouverture</h3>
                  <ul class="space-y-3 text-[14px]">
                     <li v-for="(day, idx) in dayNames" :key="idx" class="flex justify-between items-center">
                        <div class="flex items-center">
                          <div class="w-2 h-2 rounded-full mr-3" :class="getOpeningHours(idx) ? 'bg-green-500' : 'bg-gray-300'"></div>
                          {{ day }}
                        </div> 
                        <span v-if="getOpeningHours(idx)">{{ formatTime(getOpeningHours(idx).open_time) }} - {{ formatTime(getOpeningHours(idx).close_time) }}</span>
                        <span v-else class="text-gray-400">Fermé</span>
                     </li>
                  </ul>
               </div>
            </div>
          </div> -->

        </div>

        <!-- Right Sticky Column -->
        <div class="w-full lg:w-[350px]">
           <div class="bg-white border border-gray-200 rounded-3xl p-8 sticky top-24 shadow-sm">
             <div class="flex justify-between items-center mb-6">
                <div>
                   <div class="text-2xl font-bold">{{ detail.rating }}</div>
                   <div class="text-xs text-gray-500">{{ detail.reviews }} avis</div>
                </div>
                <div class="h-10 w-10 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
             </div>
             <router-link :to="`/reservation/${businessId}`">
             <button  class="cursor-pointer w-full py-4 bg-black text-white rounded-full font-bold text-lg hover:shadow-xl hover:scale-[1.02] active:scale-95 transition-all mb-4">
                Réserver maintenant
             </button>
             </router-link>
             <p class="text-center text-xs text-gray-400">Confirmation instantanée</p>
           </div>
        </div>

      </div>

    </div>
    
    <!-- <FooterSection /> -->
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import Navbar from '@/components/dashboard/Navbar.vue'
import api from '@/services/api'

const route = useRoute()
const loading = ref(true)
const detail = ref(null)
const teamMembers = ref([]);

const tabs = ref([
  { id: 'prestations', label: 'Prestations' },
  { id: 'equipe', label: 'Équipe' },
  { id: 'apropos', label: 'À propos' },
])
const activeTab = ref('prestations')
const businessId = route.params.id

const dayNames = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']

const AfficheTeamMember = async () =>{
  try {
    const response = await api.get(`/team/${route.params.id}`);
    teamMembers.value = response.data.data;
  } catch (error) {
    console.error( error.response.data);
  }
}

const aficheDetail = async () => {
  try {
    const res = await api.get(`/detail/${route.params.id}`)
    detail.value = res.data
    console.log(detail.value)
  } catch (err) {
    console.error('Failed to fetch detail', err)
  } finally {
    loading.value = false;
  }
}

// const getOpeningHours = (idx) => {
//   if (!venue.value || !venue.value.location?.opening_hours) return null;
//   return venue.value.location.opening_hours.find(h => h.day_of_week === idx && !h.is_closed);
// }

// const formatTime = (time) => time ? time.substring(0, 5) : '';

onMounted(() => {
  aficheDetail()
  AfficheTeamMember()
})
</script>
