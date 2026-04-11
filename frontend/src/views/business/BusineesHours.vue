<template>
  <div class="p-8 max-w-4xl mx-auto">
    <div class="mb-8">
      <h1 class="text-3xl font-bold tracking-tight mb-2">Horaires d'ouverture</h1>
      <p class="text-gray-500">Définissez quand votre établissement est ouvert aux clients.</p>
    </div>

    <div v-if="loading" class="flex justify-center py-12">
      <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600"></div>
    </div>

    <div v-else class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
      <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="font-bold">Horaires hebdomadaires</h3>
        <button @click="saveHours" :disabled="saving" class="px-6 py-2 bg-black text-white rounded-full font-bold text-sm hover:bg-gray-800 disabled:opacity-50">
          {{ saving ? 'Enregistrement...' : 'Enregistrer' }}
        </button>
      </div>

      <div class="divide-y divide-gray-100">
        <div v-for="(day, index) in hours" :key="index" class="p-6 flex flex-wrap items-center gap-6">
          <div class="w-24 font-bold text-gray-900 capitalize">{{ dayNames[day.day_of_week] }}</div>
          
          <div class="flex items-center gap-3">
             <label class="relative inline-flex items-center cursor-pointer">
              <input type="checkbox" v-model="day.is_closed" :true-value="false" :false-value="true" class="sr-only peer">
              <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
              <span class="ml-3 text-sm font-medium text-gray-900">{{ day.is_closed ? 'Fermé' : 'Ouvert' }}</span>
            </label>
          </div>

          <div v-if="!day.is_closed" class="flex items-center gap-4 animate-fadeIn">
            <input type="time" v-model="day.open_time" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-indigo-500">
            <span class="text-gray-400">à</span>
            <input type="time" v-model="day.close_time" class="border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-1 focus:ring-indigo-500">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { api } from '../../store.js';

const loading = ref(true);
const saving = ref(false);
const locationId = ref(null);
const hours = ref([]);

const dayNames = [
  'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'
];

const fetchHours = async () => {
  try {
    const res = await api.get('/business/locations');
    const primaryLoc = res.data[0];
    if (primaryLoc) {
      locationId.value = primaryLoc.id;
      // Initialize if empty
      if (primaryLoc.opening_hours && primaryLoc.opening_hours.length > 0) {
        // Sort by day_of_week
        hours.value = primaryLoc.opening_hours.sort((a,b) => a.day_of_week - b.day_of_week);
      } else {
        hours.value = dayNames.map((_, i) => ({
          day_of_week: i,
          open_time: '09:00:00',
          close_time: '18:00:00',
          is_closed: i === 6 // Closed on Sunday by default
        }));
      }
    }
  } catch (err) {
    console.error('Failed to fetch hours', err);
  } finally {
    loading.value = false;
  }
};

const saveHours = async () => {
  if (!locationId.value) return;
  saving.value = true;
  try {
    await api.put(`/business/locations/${locationId.value}/hours`, {
      hours: hours.value.map(h => ({
        day_of_week: h.day_of_week,
        open_time: h.is_closed ? null : (h.open_time.includes(':') && h.open_time.split(':').length === 2 ? h.open_time + ':00' : h.open_time),
        close_time: h.is_closed ? null : (h.close_time.includes(':') && h.close_time.split(':').length === 2 ? h.close_time + ':00' : h.close_time),
        is_closed: h.is_closed
      }))
    });
    alert('Horaires enregistrés avec succès !');
  } catch (err) {
    console.error('Failed to save hours', err);
    alert('Erreur lors de l\'enregistrement.');
  } finally {
    saving.value = false;
  }
};

onMounted(fetchHours);
</script>

<style scoped>
.animate-fadeIn {
  animation: fadeIn 0.3s ease-out;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateX(-10px); }
  to { opacity: 1; transform: translateX(0); }
}
</style>
