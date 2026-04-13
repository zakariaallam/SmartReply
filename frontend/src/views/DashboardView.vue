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
      <div class="bg-gradient-to-b from-[#FFF2FD]/80 to-white pt-6 pb-2">
        <SectionCarousel title="Recommandés">
          <VenueCard 
            v-for="(venue, index) in recommended" 
            :key="'rec-'+index"
            v-bind="venue"
          />
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
      <AppPromo />

      <!-- 10. La destination n° 1 dans le monde pour le bien-être -->
      <StatsSection />

      <!-- 11. Fresha for business -->
      <BusinessPromo />

       <!-- 9. Avis -->
      <Reviews>
        <ReviewCard v-for="(review, index) in reviews" :key="'rev-'+index" v-bind="review" />
      </Reviews>

      <!-- 12. Recherchez par ville -->
      <FooterSection />
    </div>
  </div>
</template>


<script setup>
import Hero from '@/components/dashboard/Hero.vue';
import Navbar from '@/components/dashboard/Navbar.vue';
import api from '@/services/api';
import { onMounted, ref } from 'vue'

const recommended = ref([])

const fetshRecommended = async () =>{
  try{
  const res = await api.get('/business')
  recommended.value = res.data
  console.log(res.data)
  }catch(err){
    console.log(err)
  }
}

onMounted (() => {
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
