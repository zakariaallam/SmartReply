<template>
  <div class="min-h-screen bg-white font-sans text-[#0E0F12]">
    <Navbar />
    <Hero />

    <div class="mt-6">
      <!-- 3. Reprendre rendez-vous -->
      <!-- <SectionCarousel title="Reprendre rendez-vous">
         <VenueCard v-bind="recommended[0]" />
         <VenueCard v-bind="recommended[1]" />
      </SectionCarousel> -->

      <!-- 4. Récemment consulté -->
      <!-- <SectionCarousel title="Récemment consulté">
         <VenueCard v-bind="trends[0]" />
         <VenueCard v-bind="trends[1]" />
      </SectionCarousel> -->

      <!-- 5. Recommandés -->
      <div  class="bg-gradient-to-b from-[#FFF2FD]/80 to-white pt-6 pb-2">
        <SectionCarousel title="Recommandés" >
          <div v-for="recommand in recommendeds" :key="recommand.id">
          <div class="relative w-full h-[200px] mb-3 overflow-hidden rounded-xl">
            <!-- Image -->
            <!-- <div
              class="absolute inset-0 bg-gray-200 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
              :style="{ backgroundImage: `url(${recommand.cover_url})` }"></div> -->
              <img :src="recommand.cover_url" alt="image" class="w-full h-full object-cover"/>
          </div>

          <div class="pt-4 flex flex-col items-start text-left">
            <div class="flex justify-between w-full items-start mb-1">
              <h3 class="font-bold text-[16px] leading-tight text-[#0E0F12] pr-2">{{ recommand.name }}</h3>
              <div class="flex items-center text-[13px] font-semibold text-gray-900 mt-[2px] flex-shrink-0">
                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <span class="mr-1">{{ rating }}</span>
                <span class="text-gray-500 font-normal">({{ reviews }})</span>
              </div>
            </div>
            <p class="text-[13px] text-gray-500 mt-1 truncate w-full">{{ location }}</p>
            <p class="text-[13px] text-gray-500 mt-0.5 truncate w-full">{{ category }}</p>
          </div>
          <!-- <VenueCard 
            v-for="(venue, index) in recommended" 
            :key="'rec-'+index"
            v-bind="venue"
          /> -->
          </div>
        </SectionCarousel>
      </div>

      <!-- 6. Nouveaux sur Fresha -->
      <!-- <SectionCarousel title="Nouveaux sur Fresha">
        <VenueCard 
          v-for="(venue, index) in trends" 
          :key="'new-'+index"
          v-bind="venue"
        />
      </SectionCarousel> -->

      <!-- 7. Tendances -->
      <!-- <SectionCarousel title="Tendances">
        <VenueCard 
          v-for="(venue, index) in trends" 
          :key="'trend-'+index"
          v-bind="venue"
        />
      </SectionCarousel> -->

      <!-- 8. Téléchargez l'app Fresha -->
      <!-- <AppPromo /> -->

      <!-- 10. La destination n° 1 dans le monde pour le bien-être -->
      <!-- <StatsSection /> -->

      <!-- 11. Fresha for business -->
      <!-- <BusinessPromo /> -->

      <!-- 9. Avis -->
      <!-- <Reviews>
        <ReviewCard v-for="(review, index) in reviews" :key="'rev-' + index" v-bind="review" />
      </Reviews> -->

      <!-- 12. Recherchez par ville -->
      <!-- <FooterSection /> -->
       
    </div>
  </div>
</template>


<script setup>
import Hero from '@/components/dashboard/Hero.vue';
import Navbar from '@/components/dashboard/Navbar.vue';
import SectionCarousel from '@/components/SectionCarousel.vue';
import api from '@/services/api';
import { onMounted, ref } from 'vue'

const recommendeds = ref([])

const fetshRecommended = async () => {
  try {
    const res = await api.get('/business')
    recommendeds.value = res.data.data
    console.log(res.data.data)
  } catch (err) {
    console.log(err)
  }
}

onMounted(() => {
  fetshRecommended()
})
</script>



<!-- ************************************************************************** -->
<!-- <template>
  <div class="flex min-h-screen bg-gray-100"> -->

<!-- Sidebar -->
<!-- <Sidebar/> -->
<!-- <aside class="w-64 bg-blue-900 text-white p-5">
      <h2 class="text-xl font-bold mb-8">SmartReply</h2>

      <ul class="space-y-4">
        <li class="bg-blue-700 p-2 rounded">Dashboard</li>
        <li class="hover:bg-blue-700 p-2 rounded cursor-pointer">Messages</li>
        <li class="hover:bg-blue-700 p-2 rounded cursor-pointer">Appointments</li>
        <li class="hover:bg-blue-700 p-2 rounded cursor-pointer">Settings</li>
        <li class="hover:bg-blue-700 p-2 rounded cursor-pointer">Logout</li>
      </ul>
    </aside> -->

<!-- Content -->
<!-- <div class="flex-1 p-6"> -->

<!-- Top Bar -->
<!-- <div class="flex justify-between items-center mb-6">
        <input
          type="text"
          placeholder="Search..."
          class="p-2 rounded bg-white shadow w-1/3"
        />

        <div class="flex items-center gap-3">
          <img
            src="https://i.pravatar.cc/40"
            class="rounded-full"
          />
          <span>{{ user?.first_name }}</span>
        </div>
      </div> -->

<!-- Stats -->
<!-- <div class="grid grid-cols-3 gap-4 mb-6">
        <StatCard title="Today's Messages" value="32" color="blue" />
        <StatCard title="AI Replies" value="28" color="green" />
        <StatCard title="Appointments" value="8" color="purple" />
      </div> -->

<!-- Chart -->
<!-- <div class="bg-white p-4 rounded shadow mb-6">
        <h2 class="text-lg font-semibold mb-4">AI Performance</h2>

        <div class="h-40 flex items-center justify-center text-gray-400">
          Chart Here 📊
        </div>
      </div> -->

<!-- Bottom -->
<!-- <div class="grid grid-cols-2 gap-4"> -->

<!-- Messages -->
<!-- <div class="bg-white p-4 rounded shadow">
          <h2 class="font-semibold mb-4">Recent Messages</h2>

          <div v-for="msg in messages" :key="msg.id" class="flex items-center gap-3 mb-3">
            <img :src="msg.avatar" class="w-10 h-10 rounded-full" />
            <div>
              <p class="font-semibold">{{ msg.name }}</p>
              <p class="text-sm text-gray-500">{{ msg.text }}</p>
            </div>
          </div>
        </div> -->

<!-- Platforms -->
<!-- <div class="bg-white p-4 rounded shadow">
          <h2 class="font-semibold mb-4">Platforms</h2>

          <div class="flex gap-4">
            <div class="bg-gray-100 p-4 rounded text-center w-1/2">
              📱 WhatsApp
            </div>
            <div class="bg-gray-100 p-4 rounded text-center w-1/2">
              📸 Instagram
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</template> -->

<!-- <script setup>
import { onMounted, ref } from 'vue'
import StatCard from '../components/dashboard/StatCard.vue'
import api from '@/services/api'
import Sidebar from '@/components/dashboard/Sidebar.vue'

const user = ref(null)
const messages = ref([
  {
    id: 1,
    name: 'Mohamed',
    text: 'wach kayn haircut?',
    avatar: 'https://i.pravatar.cc/40?img=1'
  },
  {
    id: 2,
    name: 'Sara',
    text: 'bghit rdv',
    avatar: 'https://i.pravatar.cc/40?img=2'
  }
])

const loadeDashboard = async ()=> {
try{
  const res = await api.get('/')
  user.value = res.data
  console.log(user)
}catch(error){
   console.log(error)
}
}

onMounted(() =>{
  loadeDashboard()
})
</script> -->
