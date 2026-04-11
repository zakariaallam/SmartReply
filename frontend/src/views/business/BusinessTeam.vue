<template>
  <div class="h-full flex bg-gray-50">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex">
      <div class="p-4 flex items-center gap-2 border-b border-gray-100 h-16">
        <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500 border border-gray-200 mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <h2 class="font-bold text-lg">Équipe</h2>
      </div>
      <div class="py-2 overflow-y-auto flex-grow px-3">
        <a href="#" class="block px-3 py-2 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium mt-1">Membres de l'équipe</a>
        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mt-1">Plages horaires programmées</a>
        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mt-1">Feuilles de temps</a>
         <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mt-1">Traitements de la paie</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-8 overflow-y-auto">
      <div class="max-w-5xl mx-auto w-full">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
          <div class="flex items-center gap-3">
            <h1 class="text-3xl font-bold">Membres de l'équipe</h1>
            <span class="bg-gray-100 text-gray-600 border border-gray-200 px-2.5 py-0.5 rounded-full text-sm font-bold mt-1 shadow-sm">{{ teamMembers.length }}</span>
          </div>
          
          <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2">
              Options
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <button class="px-5 py-2 bg-black text-white rounded-full text-sm font-medium hover:bg-gray-800 transition-colors">
              Ajouter
            </button>
          </div>
        </div>

        <!-- Warning Banner -->
        <div class="bg-[#fff9e6] border border-[#ffecb3] rounded-xl p-4 flex items-center justify-between shadow-sm mb-6">
          <p class="text-gray-800 text-sm">
            Activez votre plan pour éviter l'interruption de votre accès après la fin de votre période<br>
            d'essai gratuit dans <strong class="font-bold">7 jours.</strong>
          </p>
          <button class="bg-black text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-gray-800 transition-colors whitespace-nowrap">
            Activer le plan
          </button>
        </div>

        <!-- Filters Bar -->
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3 flex-grow">
            <!-- Search -->
            <div class="relative max-w-sm w-full">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
              <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-full leading-5 bg-white placeholder-gray-300 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Rechercher les membres de l'équipe">
            </div>

             <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2">
              Filtres
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </button>
          </div>

          <button class="px-4 py-2 bg-white border border-gray-200 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2 ml-auto shrink-0">
              Ordre personnalisé
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
              </svg>
          </button>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-white">
              <tr>
                <th scope="col" class="px-6 py-4 text-left w-12">
                  <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                </th>
                <th scope="col" class="px-2 py-4 text-left text-sm font-bold text-gray-900 group cursor-pointer w-1/3">
                  Nom
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline text-gray-400 group-hover:text-gray-600 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" /></svg>
                </th>
                <th scope="col" class="px-6 py-4 text-left text-sm font-bold text-gray-900 w-1/3">
                  Coordonnées
                </th>
                <th scope="col" class="px-6 py-4 text-left text-sm font-bold text-gray-900 w-1/4">
                  Rôle d'autorisation
                </th>
                <th scope="col" class="px-6 py-4 relative w-20">
                  <span class="sr-only">Actions</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
              <tr v-if="loading" class="animate-pulse">
                 <td colspan="5" class="py-10 text-center text-gray-500 font-medium">Chargement des membres de l'équipe...</td>
              </tr>
              <tr v-if="!loading && teamMembers.length === 0">
                 <td colspan="5" class="py-10 text-center text-gray-500 font-medium">Aucun membre n'a été trouvé.</td>
              </tr>

              <!-- Dynamic Rows -->
              <tr v-for="member in teamMembers" :key="member.id" class="hover:bg-gray-50/50 transition-colors group">
                <td class="px-6 py-5 whitespace-nowrap">
                  <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                </td>
                <td class="px-2 py-5 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <!-- Handle explicit avatar vs initials -->
                      <div v-if="member.avatar_url" class="h-10 w-10 rounded-full p-0.5 border-2 border-teal-400 overflow-hidden bg-white shadow-sm hover:scale-105 transition-transform duration-300">
                         <img class="h-full w-full rounded-full object-cover" :src="member.avatar_url" :alt="member.first_name">
                       </div>
                      <div v-else class="h-10 w-10 rounded-full border border-blue-200 text-blue-600 bg-blue-50 flex items-center justify-center font-bold text-sm shadow-sm relative z-0">
                         {{ member.first_name?.charAt(0) || '' }}{{ member.last_name?.charAt(0) || '' }}
                      </div>
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-bold text-gray-900">{{ member.first_name }} {{ member.last_name }}</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-5 whitespace-nowrap">
                  <div class="text-sm text-gray-500 font-medium">
                    <div v-if="member.email">{{ member.email }}</div>
                    <div v-if="member.phone">{{ member.phone }}</div>
                    <span v-if="!member.email && !member.phone" class="text-gray-300">-</span>
                  </div>
                </td>
                <td class="px-6 py-5 whitespace-nowrap">
                  <div class="text-sm text-gray-900 font-medium whitespace-pre-wrap">{{ getRoleName(member) }}</div>
                </td>
                <td class="px-6 py-5 whitespace-nowrap text-right text-sm font-medium">
                  <button class="px-3 py-1.5 bg-white border border-gray-200 rounded-full hover:bg-gray-50 flex items-center justify-between w-[90px] ml-auto transition-colors focus:ring-2 focus:ring-indigo-500">
                    Actions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { api } from '@/store';

const teamMembers = ref([]);
const loading = ref(true);

const fetchTeamMembers = async () => {
    loading.value = true;
    try {
        const response = await api.get('/business/staff');
        teamMembers.value = response.data;
    } catch (error) {
        console.error('Failed to fetch staff data:', error);
    } finally {
        loading.value = false;
    }
};

const getRoleName = (member) => {
    // member.role object exists if mapped from resource, else check role_id, else default.
    if(member.role && member.role.name) {
       // Mock translations for prototype based on screenshots
       if(member.role.name.toLowerCase() === 'owner') return 'Propriétaire';
       if(member.role.name.toLowerCase() === 'staff') return 'Membre de l\'équipe';
       return member.role.name;
    }
    // Fallbacks
    if(member.user_id) return 'Propriétaire'; // simplistic fallback logic
    return 'Aucun accès';
};

onMounted(() => {
    fetchTeamMembers();
});
</script>
