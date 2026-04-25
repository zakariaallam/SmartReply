<template>
  <div class="min-h-screen bg-white font-sans text-[#0E0F12]">
    <Navbar />
    <Hero />

    <div class="mt-6" >
      <SectionCarousel title="Reprendre rendez-vous" v-if="authState.isLoggedIn">
        <div v-for="appointement in reprendres.appointments" :key="appointement.id">
    <img 
      :src="image"
      class="w-40 h-40 object-cover"
    />
    <div class="p-4 flex flex-col justify-between flex-1">

      <div>
        <h3 class="font-semibold text-lg text-gray-900">
          {{ reprendres.business?.name }}
        </h3>

        <p class="text-gray-700 mt-1">
          {{ appointement.date }} a {{ appointement.time }}
        </p>

        <!-- <p class="text-gray-400 text-sm mt-1 truncate">
          {{ price }} • {{ details }}
        </p> -->
      </div>
    </div>
    </div>
      </SectionCarousel>

      <!-- 4. Récemment consulté -->
      <!-- <SectionCarousel title="Récemment consulté">
         <VenueCard v-bind="trends[0]" />
         <VenueCard v-bind="trends[1]" />
      </SectionCarousel>

      <!-- 5. Recommandés -->
      <div class="bg-gradient-to-b from-[#FFF2FD]/80 to-white pt-6 pb-2">

        <SectionCarousel title="Recommandés">
          <div v-for="recommand in recommendeds" :key="recommand.id">
            <router-link :to="`/detail/${recommand.id}`">
              <div class="relative w-full h-[200px] mb-3 overflow-hidden rounded-xl">
                <!-- Image -->
                <!-- <div
              class="absolute inset-0 bg-gray-200 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
              :style="{ backgroundImage: `url(${recommand.cover_url})` }"></div> -->
                <img :src="recommand.cover_url" alt="image" class="w-full h-full object-cover" />
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
          </router-link>
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
import { authState } from '@/store';

const recommendeds = ref([])
const reprendres = ref({
  business: null,
  appointments: []
})

const fetshRecommended = async () => {
  try {
    const res = await api.get('/business')
    recommendeds.value = res.data.data
  } catch (err) {
    console.log(err)
  }
}
const fetshReprendre = async () => {
  try {
    const res = await api.get('/appointement')
    console.log(res.data.data)
    reprendres.business.value = res.data.business
    reprendres.appointments.value = res.data.appointments
  } catch (err) {
    console.log(err.response.data)
  }
}

onMounted(() => {
  fetshRecommended()
  fetshReprendre()
})
</script>