<template>
  <div class="p-8 max-w-6xl mx-auto">
    <div class="mb-8 flex justify-between items-end">
      <div>
        <h1 class="text-3xl font-bold tracking-tight mb-2">Photos de l'entreprise</h1>
        <p class="text-gray-500">Ajoutez des photos pour montrer votre établissement et votre travail aux clients.</p>
      </div>
      <button @click="showUploadModal = true" class="px-6 py-2.5 bg-black text-white rounded-full font-bold text-sm hover:bg-gray-800 transition-shadow">
        Ajouter des photos
      </button>
    </div>

    <div v-if="loading" class="flex justify-center py-12">
      <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600"></div>
    </div>

    <div v-else-if="images.length === 0" class="bg-white border-2 border-dashed border-gray-200 rounded-3xl p-16 text-center">
      <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-2">Aucune photo pour l'instant</h3>
      <p class="text-gray-500 mb-8 max-w-sm mx-auto">Les entreprises avec des photos reçoivent jusqu'à 3 fois plus de réservations.</p>
      <button @click="showUploadModal = true" class="px-8 py-3 bg-indigo-600 text-white rounded-full font-bold hover:bg-indigo-700 transition-colors">
        Commencer à ajouter
      </button>
    </div>

    <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div v-for="img in images" :key="img.id" class="group relative aspect-square bg-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100">
        <img :src="img.image_url" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Gallery">
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">
          <button v-if="!img.is_cover" @click="setCover(img.id)" class="p-2 bg-white text-gray-900 rounded-full hover:bg-indigo-600 hover:text-white transition-colors" title="Définir comme couverture">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
          </button>
          <button @click="deleteImage(img.id)" class="p-2 bg-white text-gray-900 rounded-full hover:bg-red-600 hover:text-white transition-colors" title="Supprimer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
          </button>
        </div>

        <div v-if="img.is_cover" class="absolute top-3 left-3 bg-white px-2 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider text-indigo-600 shadow-sm">
          Couverture
        </div>
      </div>
    </div>

    <!-- Upload Modal -->
    <div v-if="showUploadModal" class="fixed inset-0 z-50 flex items-center justify-center p-4">
       <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="showUploadModal = false"></div>
       <div class="relative bg-white rounded-3xl w-full max-w-lg overflow-hidden shadow-2xl animate-popIn">
         <div class="p-8">
           <h3 class="text-2xl font-bold mb-6">Ajouter une photo</h3>
           <div class="space-y-4">
             <div>
               <label class="block text-sm font-bold mb-2">URL de l'image</label>
               <input v-model="newImageUrl" type="text" placeholder="https://unsplash.com/..." class="w-full border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-indigo-600 transition-colors">
             </div>
             <div>
               <label class="block text-sm font-bold mb-2">Légende (Optionnel)</label>
               <input v-model="newCaption" type="text" placeholder="Entrée, Salon, Événement..." class="w-full border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-indigo-600 transition-colors">
             </div>
             <div class="flex items-center gap-3">
               <input type="checkbox" v-model="newIsCover" id="is_cover" class="w-4 h-4 text-indigo-600 rounded">
               <label for="is_cover" class="text-sm font-medium">Définir comme photo de couverture</label>
             </div>
           </div>
         </div>
         <div class="bg-gray-50 px-8 py-6 flex justify-end gap-3">
           <button @click="showUploadModal = false" class="px-6 py-2.5 font-bold text-sm text-gray-500 hover:text-gray-900 transition-colors">Annuler</button>
           <button @click="uploadImage" :disabled="!newImageUrl || uploading" class="px-8 py-2.5 bg-black text-white rounded-full font-bold text-sm hover:bg-gray-800 disabled:opacity-50 shadow-lg">
             {{ uploading ? 'Envoi...' : 'Ajouter' }}
           </button>
         </div>
       </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { api } from '../../store.js';

const loading = ref(true);
const uploading = ref(false);
const images = ref([]);

const showUploadModal = ref(false);
const newImageUrl = ref('');
const newCaption = ref('');
const newIsCover = ref(false);

const fetchImages = async () => {
  try {
    const res = await api.get('/business/images');
    images.value = res.data.data;
  } catch (err) {
    console.error('Failed to fetch images', err);
  } finally {
    loading.value = false;
  }
};

const uploadImage = async () => {
  uploading.value = true;
  try {
    const res = await api.post('/business/images', {
      image_url: newImageUrl.value,
      caption: newCaption.value,
      is_cover: newIsCover.value
    });
    images.value.push(res.data);
    showUploadModal.value = false;
    newImageUrl.value = '';
    newCaption.value = '';
    newIsCover.value = false;
  } catch (err) {
    alert('Erreur lors de l\'ajout de la photo.');
  } finally {
    uploading.value = false;
  }
};

const deleteImage = async (id) => {
  if (!confirm('Supprimer cette photo ?')) return;
  try {
    await api.delete(`/business/images/${id}`);
    images.value = images.value.filter(img => img.id !== id);
  } catch (err) {
    alert('Erreur lors de la suppression.');
  }
};

const setCover = async (id) => {
  try {
    await api.post(`/business/images/${id}/cover`);
    images.value = images.value.map(img => ({
      ...img,
      is_cover: img.id === id
    }));
  } catch (err) {
    alert('Erreur lors de la modification.');
  }
};

onMounted(fetchImages);
</script>

<style scoped>
.animate-popIn {
  animation: popIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
@keyframes popIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
</style>
