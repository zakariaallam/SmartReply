<template>
  <div class="p-8 max-w-4xl mx-auto">
    <div class="mb-8">
      <h1 class="text-3xl font-bold tracking-tight mb-2">Horaires d'ouverture</h1>
      <p class="text-gray-500">Définissez quand votre établissement est ouvert aux clients.</p>
    </div>

    <!-- <div  class="flex justify-center py-12">
      <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600"></div>
    </div> -->

    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
      <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="font-bold">Horaires hebdomadaires</h3>
        <button @click="saveHours" :disabled="saving"
          class=" cursor-pointer px-6 py-2 bg-black text-white rounded-full font-bold text-sm hover:bg-gray-800 disabled:opacity-50">
          {{ saving ? 'Enregistrement...' : 'Enregistrer' }}
        </button>
      </div>

      <div class="p-6 max-w-xl mx-auto bg-white rounded-2xl shadow">

        <h2 class="text-2xl font-bold mb-6">Horaires d'ouverture</h2>

        <div class="space-y-4">

          <!-- Lundi -->
          <div v-for="day in dayNames" class="flex items-center justify-between">
            <span class="w-28 font-semibold">{{ day.name }}</span>

            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" v-model="day.isOpen" />
              <span class="text-sm">
                {{ day.isOpen ? 'Ouvert' : 'Fermé' }}
              </span>
            </label>

            <!-- Time Inputs -->
            <div v-if="day.isOpen" class="flex items-center gap-3 ml-4">
              <input type="time" v-model="day.open" class="border rounded px-2 py-1 text-sm" />
              <span>→</span>
              <input type="time" v-model="day.close" class="border rounded px-2 py-1 text-sm" />
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import api from '@/services/api';
import { ref, onMounted } from 'vue';

const saving = ref(false);
const hours = ref([]);

const dayNames = ref([
  {name: 'Lundi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Mardi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Mercredi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Jeudi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Vendredi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Samedi',isOpen : true,open: '09:00',close: '18:00'},
  {name: 'Dimanche',isOpen : false,open: '09:00',close: '18:00'},
]);

const saveHours = async () =>{
  saving.value = true
  try{
    const paylode = dayNames.value.map(d =>({
      name: d.name,
      isOpen: d.isOpen,
      open: d.open,
      close: d.close
    }))
    const res = await api.patch('business',{working_hours: paylode})
    console.log(res.data)
  }catch(err){
    console.log(err.response.data);
  }finally{
    saving.value = false
  }
}


</script>

<style scoped>
.animate-fadeIn {
  animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateX(-10px);
  }

  to {
    opacity: 1;
    transform: translateX(0);
  }
}
</style>
