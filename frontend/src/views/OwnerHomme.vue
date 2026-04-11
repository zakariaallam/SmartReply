<template>
  <div class="p-8 max-w-7xl mx-auto space-y-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      
      <!-- Recent Sales -->
      <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex flex-col h-80">
        <div class="flex justify-between items-start mb-2">
          <div>
            <h2 class="font-bold text-lg">Ventes récentes</h2>
            <p class="text-sm text-gray-500">7 derniers jours</p>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
            </svg>
          </button>
        </div>
        <div class="font-bold text-2xl mb-4">0 MAD</div>
        <div class="text-sm text-gray-500 mb-6">
          <span class="mr-4">Rendez-vous <strong class="text-gray-900">3</strong></span>
          <span>Montant des rendez-vous <strong class="text-gray-900">75 MAD</strong></span>
        </div>
        
        <!-- Fake Chart -->
        <div class="mt-auto relative w-full h-32 border-b border-l border-gray-200 flex items-end ml-4 mb-4">
          <!-- Y Axis Labels -->
          <div class="absolute -left-10 top-0 h-full flex flex-col justify-between text-[10px] text-gray-400 font-mono">
            <span>80 MAD</span>
            <span>60 MAD</span>
            <span>40 MAD</span>
            <span>20 MAD</span>
            <span>0 MAD</span>
          </div>
          
          <div class="w-full flex justify-between h-full relative">
            <!-- Grid lines -->
            <div class="absolute w-full h-[1px] bg-gray-100 top-[25%]"></div>
            <div class="absolute w-full h-[1px] bg-gray-100 top-[50%]"></div>
            <div class="absolute w-full h-[1px] bg-gray-100 top-[75%]"></div>
            
            <!-- X Axis Labels -->
            <div class="absolute -bottom-6 w-full flex justify-between text-[10px] text-gray-400 font-mono pl-2">
              <span class="-rotate-45 block">sam. 28</span>
              <span class="-rotate-45 block">dim. 29</span>
              <span class="-rotate-45 block">lun. 30</span>
              <span class="-rotate-45 block">mar. 31</span>
              <span class="-rotate-45 block">mer. 1</span>
              <span class="-rotate-45 block">jeu. 2</span>
              <span class="-rotate-45 block">ven. 3</span>
              <span class="-rotate-45 block text-gray-900 font-bold">sam. 4</span>
            </div>
            
            <!-- Trend Line (SVG) -->
            <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="none">
              <!-- Ventes line (flat at 0) -->
              <polyline points="0,128 30,128 70,128 110,128 150,128 190,128 230,128 280,128" fill="none" stroke="#6b4cff" stroke-width="2" />
              <circle cx="280" cy="128" r="3" fill="#6b4cff" />
              
              <!-- Rendez-vous line (spikes at end) -->
              <polyline points="0,128 30,128 70,128 110,128 150,128 190,128 230,128 280,20" fill="none" stroke="#10b981" stroke-width="2" />
              <circle cx="280" cy="20" r="3" fill="#10b981" />
            </svg>
          </div>
        </div>
        
        <!-- Legend -->
        <div class="flex gap-4 text-xs font-medium ml-4 mt-8">
          <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-[#6b4cff]"></div> Ventes</div>
          <div class="flex items-center gap-1"><div class="w-2 h-2 rounded-full bg-emerald-500"></div> Rendez-vous</div>
        </div>
      </div>

      <!-- Upcoming (Empty State) -->
      <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex flex-col h-80">
        <div class="flex justify-between items-start mb-auto">
          <div>
            <h2 class="font-bold text-lg">Rendez-vous à venir</h2>
            <p class="text-sm text-gray-500">7 prochains jours</p>
          </div>
          <button class="text-gray-400 hover:text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
            </svg>
          </button>
        </div>
        
        <div class="flex flex-col items-center justify-center h-full pb-8">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
          </svg>
          <h3 class="font-bold mb-2">Votre calendrier est vide</h3>
          <p class="text-sm text-gray-500 text-center max-w-xs">Prenez des rendez-vous. Les informations concernant votre calendrier s'afficheront ici.</p>
        </div>
      </div>
      
      <!-- Appointment History -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden flex flex-col">
        <div class="p-6 pb-2">
          <h2 class="font-bold text-lg mb-4">Historique des rendez-vous</h2>
        </div>
        <div class="flex-grow overflow-auto border-t border-gray-100 px-6 divide-y divide-gray-100">
          
          <div v-if="dashboardData.recent_appointments.length === 0" class="py-10 text-center text-sm text-gray-500 font-medium">
            Aucun historique de rendez-vous récents.
          </div>

          <div v-for="apt in dashboardData.recent_appointments" :key="apt.id" class="py-4 flex gap-4">
            <div class="w-10 text-center">
               <div class="text-xl font-bold">{{ formatDateDay(apt.start_datetime) }}</div>
               <div class="text-[10px] text-gray-500 font-semibold uppercase">{{ formatMonth(apt.start_datetime) }}</div>
            </div>
            <div class="flex-grow">
              <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
                <span>{{ formatDateTime(apt.start_datetime) }}</span>
                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-blue-600">
                   {{ apt.status === 'confirmed' ? 'Réservé' : apt.status }}
                </span>
              </div>
              <div class="font-bold">
                 {{ apt.appointment_services?.length > 0 ? apt.appointment_services[0].service?.name : 'Prestation' }}
              </div>
              <div class="text-sm text-gray-500">
                 {{ apt.client?.user?.first_name }} {{ apt.client?.user?.last_name }}, avec {{ apt.booked_by?.first_name || 'Équipe' }}
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!-- Upcoming Today -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 flex flex-col h-[350px]">
        <h2 class="font-bold text-lg mb-auto">Vos rendez-vous à venir aujourd'hui</h2>
        
        <div class="flex flex-col items-center justify-center h-full pb-8">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 class="font-bold mb-2">Aucun rendez-vous aujourd'hui</h3>
          <p class="text-sm text-gray-500 text-center max-w-xs">Rendez-vous dans l'onglet <router-link to="/business/calendar" class="text-indigo-600 hover:underline">calendrier</router-link> pour ajouter de nouveaux rendez-vous</p>
        </div>
      </div>

      <!-- Popular Services -->
      <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm overflow-hidden h-[350px] flex flex-col">
        <h2 class="font-bold text-lg mb-6">Prestations les plus populaires</h2>
        
        <div class="flex-grow">
          <div class="flex border-b border-gray-200 pb-2 text-sm font-semibold mb-3">
            <div class="w-1/2">Prestation</div>
            <div class="w-1/4 text-right">Ce mois-ci</div>
            <div class="w-1/4 text-right">Le mois dernier</div>
          </div>
          
          <div v-if="dashboardData.popular_services.length === 0" class="py-6 text-sm text-gray-500 text-center">
            Aucune donnée de prestation pour le moment.
          </div>
          <div v-for="service in dashboardData.popular_services" :key="service.id" class="flex border-b border-gray-100 py-3 text-sm">
             <div class="w-1/2 font-medium">{{ service.name }}</div>
             <div class="w-1/4 text-right">{{ service.appointment_services_count || 0 }}</div>
             <div class="w-1/4 text-right">0</div> <!-- Historic tracking not fully implemented -->
          </div>
        </div>
      </div>

      <!-- Best Team Member -->
      <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm flex flex-col h-[350px]">
        <h2 class="font-bold text-lg mb-auto">Meilleur membre de l'équipe</h2>
        <div v-if="!dashboardData.top_staff" class="flex flex-col items-center justify-center h-full pb-8">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
          <h3 class="font-bold mb-2">Aucune donnée ce mois-ci</h3>
        </div>
        <div v-else class="flex flex-col items-center justify-center h-full pb-8">
           <div class="w-20 h-20 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-2xl font-bold mb-4 shadow-inner">
             {{ dashboardData.top_staff?.first_name?.charAt(0) }}{{ dashboardData.top_staff?.last_name?.charAt(0) }}
           </div>
           <h3 class="font-bold text-xl mb-1">{{ dashboardData.top_staff?.first_name }} {{ dashboardData.top_staff?.last_name }}</h3>
           <p class="text-indigo-600 font-medium text-sm">{{ dashboardData.top_staff?.schedules_count }} planifications créées</p>
        </div>
      </div>

    </div>
  </div>
</template>

<script setup>
import api from '@/services/api';
import { ref, onMounted } from 'vue';

const dashboardData = ref({
    recent_appointments: [],
    popular_services: [],
    top_staff: null,
    sales_data: null,
    business_name: ''
});

const loading = ref(true);

const fetchDashboard = async () => {
    loading.value = true;
    try {
        const response = await api.get('/business/dashboard');
        dashboardData.value = response.data;
    } catch (error) {
        console.error('Failed to fetch dashboard data:', error);
    } finally {
        loading.value = false;
    }
};

const formatDateDay = (dateString) => {
    if (!dateString) return '';
    return new Date(dateString).getDate().toString().padStart(2, '0');
};

const formatMonth = (dateString) => {
    if (!dateString) return '';
    return new Date(dateString).toLocaleString('fr-FR', { month: 'short' });
};

const formatDateTime = (dateString) => {
    if (!dateString) return '';
    const d = new Date(dateString);
    return `${d.toLocaleString('fr-FR', { weekday: 'short' })}, ${d.getDate()} ${d.toLocaleString('fr-FR', { month: 'short' })} ${d.getHours()}:${d.getMinutes().toString().padStart(2, '0')}`;
};

onMounted(() => {
    fetchDashboard();
});
</script>
