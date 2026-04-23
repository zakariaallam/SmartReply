<template>
    <Navbar />

    <!-- LEFT -->
    <div class="min-h-screen bg-gray-50 p-6">
        <div class="flex gap-6 mb-6 border-b pb-2">
            <button :class="stip === 1 ? ' font-bold border-b-2 border-black pb-1' : ' text-gray-500'">
                Prestations
            </button>

            <button :class="stip === 2 ? ' font-bold border-b-2 border-black pb-1' : ' text-gray-500'">
                Members
            </button>
            <button :class="stip === 3 ? ' font-bold border-b-2 border-black pb-1' : ' text-gray-500'">
                Hours
            </button>
            <button :class="stip === 4 ? ' font-bold border-b-2 border-black pb-1' : ' text-gray-500'">
                valider
            </button>
        </div>
        <div class="max-w-6xl mx-auto flex gap-6">
            <div class="flex-1 min-w-0">

                <div v-show="stip == 1">
                    <h1 class="text-3xl font-bold mb-4">Prestations</h1>

                    <h2 class="font-semibold mb-3">À la une</h2>

                    <div v-for="service in services" :key="service.id" @click="toggleService(service)"
                        class="flex justify-between items-center p-5 rounded-xl border mb-3 cursor-pointer transition"
                        :class="isSelected(service)
                            ? 'border-purple-500 bg-purple-50'
                            : 'border-gray-200 bg-white hover:border-gray-300'">
                        <div>
                            <h3 class="font-medium text-gray-800">{{ service.name }}</h3>
                            <p class="text-sm text-gray-500">{{ service.description }}</p>
                            <p class="mt-1 font-semibold">{{ service.price }} MAD</p>
                        </div>

                        <!-- ICON -->
                        <div>
                            <div v-if="isSelected(service)"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-500 text-white">
                                ✔
                            </div>
                            <div v-else
                                class="w-8 h-8 flex items-center justify-center rounded-full border text-gray-500">
                                +
                            </div>
                        </div>
                    </div>
                </div>

                <div v-show="stip == 2">
                    <h1 class="text-3xl font-bold mb-4">Members</h1>

                    <h2 class="font-semibold mb-3">À la une</h2>

                    <div v-for="team in teams" :key="team.id" @click="toggleMember(team)"
                        class="flex justify-between items-center p-5 rounded-xl border mb-3 cursor-pointer transition"
                        :class="selectedMember != null
                            ? 'border-purple-500 bg-purple-50'
                            : 'border-gray-200 bg-white hover:border-gray-300'">
                        <div>
                            <h3 class="font-medium text-gray-800">{{ team.name }}</h3>
                            <p class="text-sm text-gray-500">{{ team.description }}</p>
                        </div>

                        <!-- ICON -->
                        <div>
                            <div v-if="selectedMember != null"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-500 text-white">
                                ✔
                            </div>
                            <div v-else
                                class="w-8 h-8 flex items-center justify-center rounded-full border text-gray-500">
                                +
                            </div>
                        </div>
                    </div>
                </div>

                <div v-show="stip == 3">
                    <h1 class="text-3xl font-bold mb-6">Sélectionnez l'heure</h1>

                    <!-- DAYS -->
                    <div class="flex gap-3 mb-6 overflow-x-auto">
                        <div v-for="(day, idx) in hours" :key="idx" @click="selectedDay.day = day , selectedDay.date = getday(idx)"
                            class="w-16 h-20 flex flex-col items-center justify-center rounded-full cursor-pointer border transition"
                            :class="selectedDay.date?.getDate() == getday(idx).getDate()
                                ? 'bg-purple-600 text-white border-purple-600'
                                : 'bg-white text-gray-700 border-gray-200 hover:border-gray-400'">
                            <span class="font-bold">{{ getday(idx).getDate() }}</span>
                        </div>
                    </div>

                    <!-- HOURS -->
                    <div class="space-y-3" v-if="selectedDay.day != null">
                        <div v-for="hour in timeslot" :key="hour" @click="selectHour(hour)"
                            class="p-4 rounded-xl border cursor-pointer transition" :class="selectedDay.hour == hour
                                ? 'border-purple-500 bg-purple-50'
                                : 'border-gray-200 bg-white hover:border-gray-400'">
                            {{ hour }}
                        </div>
                    </div>
                </div>
            </div>

            <div v-show="stip == 4">
                <h1 class="text-3xl font-bold mb-6">Vérifiez et confirmez</h1>

                    <div class="flex justify-between items-center p-5 rounded-xl border mb-3 cursor-pointer transition">
                        <div>
                            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>

            <!-- RIGHT -->
            <div class="w-80 bg-white p-5 rounded-xl border h-fit sticky top-6">
                <h3 class="font-semibold ">Milan Russian Beauty</h3>
                <p class="mb-4 flex items-center gap-2" v-if="selectedDay?.date">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6l4 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    reservé : {{ selectedDay?.date.toDateString() }} at {{ selectedDay?.hour }}
                </p>
                <div v-for="item in selected" :key="item.id" class="flex justify-between mb-2 text-sm">
                    <span>{{ item.name }}</span>
                    <span>{{ item.price }} MAD</span>
                </div>
                <span v-if="selectedMember">avec {{ selectedMember?.name }}</span>

                <hr class="my-4" />

                <div class="flex justify-between font-semibold text-lg">
                    <span>Total</span>
                    <span>{{ total }} MAD</span>
                </div>

                <button :disabled="selected.length == 0" @click="handleStip"
                    :class="selected.length == 0 ? 'opacity-50 cursor-not-allowed mt-5 w-full bg-black text-white py-3 rounded-full font-medium' : 'cursor-pointer mt-5 w-full bg-black text-white py-3 rounded-full font-medium hover:opacity-90'">
                    {{ stip == 4 ?'valider' : 'Continuez' }}
                </button>
            </div>

        </div>
        <div v-if="showAuthModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
  <div class="bg-white rounded-2xl p-8 w-[420px] relative shadow-xl">

    <button 
      @click="fermerModal()"
      class=" cursor-pointer absolute top-4 right-4 text-gray-400 hover:text-black text-xl">
      ✕
    </button>

    <h2 class="text-2xl font-semibold mb-2">
      Connectez-vous ou inscrivez-vous
    </h2>

    <p class="text-gray-500 mb-6">
      Connectez-vous ou inscrivez-vous pour finaliser votre réservation
    </p>

    <button @click="loginWhitProvider('facebook')"
    class=" cursor-pointer w-full flex items-center justify-center gap-3 border rounded-full py-3 mb-3 hover:bg-gray-50">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" class="w-5 h-5">
      Continuer avec Facebook
    </button>

    <button @click="loginWhitProvider('google')"
    class=" cursor-pointer w-full flex items-center justify-center gap-3 border rounded-full py-3 mb-5 hover:bg-gray-50">
      <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" class="w-5 h-5">
      Continuer avec Google
    </button>

    <div class="flex items-center gap-3 mb-5">
      <div class="flex-1 h-px bg-gray-200"></div>
      <span class="text-gray-400 text-sm">ou</span>
      <div class="flex-1 h-px bg-gray-200"></div>
    </div>

    <input 
      type="email"
      placeholder="Adresse e-mail"
      class="w-full border rounded-lg px-4 py-3 mb-5 focus:outline-none focus:ring-2 focus:ring-black"
    />

    <button class="cursor-pointer w-full bg-black text-white py-3 rounded-full font-medium hover:opacity-90">
      Continuez
    </button>

  </div>
</div>
    </div>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue';
import { useRoute , useRouter } from 'vue-router';
import Navbar from '@/components/dashboard/Navbar.vue';
import api from '@/services/api';
import { authState } from '@/store';

const route = useRoute()
const router = useRoute()
const showAuthModal = ref(false)
const stip = ref(1);
const services = ref([]);
const teams = ref([]);
const hours = ref([]);
const business = ref('');
const selected = ref([])
const selectedMember = ref(null)
const selectedDay = ref({
    day: null,
    date: null,
    hour: null
});

const fetchService = async () => {
    try {
        const res = await api.get(`service/${route.params.id}`)
        services.value = res.data.service
    } catch (err) {
        console.log(err.response.data)
    }
}
const fetchTeamMembers = async () => {
    try {
        const res = await api.get(`team/${route.params.id}`)
        console.log(res.data.data)
        teams.value = res.data.data
    } catch (err) {
        console.log(err.response.data)
    }
}
const fetchBusinessHours = async () => {
    try {
        const res = await api.get(`business/${route.params.id}`)
        console.log(res.data.data)
        business.value = res.data.data
        hours.value = business.value.working_hours
    } catch (err) {
        console.log(err.response.data)
    }
}

const appoinetementStore = async () =>{
    try{
        const res = await api.post('appointement',{
            date: selectedDay.value.date,
            time: selectedDay.value.hour,
            service_id: selected.value[0].id
        })

        console.log(res.data)
    }catch(err){
        console.log(err.response.data)
    }
}

const fermerModal = () =>{
    showAuthModal.value = false;
    stip.value--
}

const handleStip = () => {
    if(stip.value == 4){
        if(authState.isLoggedIn == false){
            showAuthModal.value = true
            
        }else{
             appoinetementStore()
             router.push('/')
        }
    }
    stip.value++
}

const toggleService = (service) => {
    const index = selected.value.findIndex(s => s.id == service.id)

    if (index != -1) {
        selected.value.splice(index, 1)
    } else {
        selected.value.push(service)
    }
}

const toggleMember = (team) => {
    selectedMember.value = team
}

const isSelected = (service) => {
    return selected.value.some(s => s.id == service.id)
}

const total = computed(() => {
    return selected.value.reduce((sum, s) => sum + s.price, 0);
});

const generateTime = (open, close, interval = 30) => {
    const time = []

    let [h, m] = open.split(':').map(Number)
    let [endH, endM] = close.split(':').map(Number)

    let start = new Date()
    start.setHours(h, m, 0)
    let end = new Date();
    end.setHours(endH, endM, 0)

    while (start < end) {
        let hh = String(start.getHours()).padStart(2, '0')
        let mm = String(start.getMinutes()).padStart(2, '0')

        time.push(`${hh}:${mm}`)
        start.setMinutes(start.getMinutes() + interval)
    }
    return time
}
const timeslot = computed(() => {
    const day = selectedDay.value.day
    if (!day) return []

    if (!day.isOpen) return []

    return generateTime(day.open, day.close)
})

const selectHour = (hour) => {
    selectedDay.value.hour = hour
}

const getday = (index) =>{
    let date = new Date();
    date.setDate(date.getDate() + index)
    return date
}

// OAuth 
const loginWhitProvider = (provider) => {
    window.location.href = `http://localhost:80/api/auth/redirect/${provider}`
}
onMounted(() => {
    fetchService();
    fetchTeamMembers();
    fetchBusinessHours();
})

</script>