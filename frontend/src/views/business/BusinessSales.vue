<template>
  <div class="h-full flex bg-gray-50">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex h-full">
      <div class="px-4 py-4 flex items-center gap-2">
        <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500 border border-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <h2 class="font-bold text-lg tracking-tight">Ventes</h2>
      </div>
      <div class="py-2 overflow-y-auto flex-grow flex flex-col px-3 gap-1">
        <a href="#" class="block px-3 py-2.5 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">Résumé des ventes quotidiennes</a>
        <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Rendez-vous</a>
        <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Ventes</a>
        <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Paiements</a>
        <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Cartes cadeaux vendues</a>
        <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Abonnements vendus</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-8 overflow-y-auto">
      <div class="max-w-6xl mx-auto w-full">
        <!-- Header -->
        <div class="flex justify-between items-start mb-8">
          <div>
            <h1 class="text-3xl font-bold tracking-tight mb-2">Ventes quotidiennes</h1>
            <p class="text-gray-500">Affichez, filtrez et exportez les transactions et les mouvements de trésorerie de la journée.</p>
          </div>
          
          <div class="flex items-center gap-3 relative">
            <button @click="showExportMenu = !showExportMenu" class="px-5 py-2.5 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2 shadow-sm transition-colors">
              Exporter
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <button class="bg-black text-white px-5 py-2.5 rounded-full font-medium hover:bg-gray-800 transition-colors text-sm shadow">
              Ajouter
            </button>

            <!-- Export Menu -->
            <div v-if="showExportMenu" class="absolute right-[90px] top-12 w-48 bg-white border border-gray-200 shadow-xl rounded-xl py-2 z-50 text-sm">
                <ul>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg> PDF</a>
                  </li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg> CSV</a>
                  </li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-gray-50">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg> Excel</a>
                  </li>
                </ul>
            </div>
          </div>
        </div>

        <!-- Date Picker Bar -->
        <div class="flex items-center mb-8">
           <div class="flex items-center border border-gray-300 rounded-full bg-white shadow-sm overflow-hidden">
             <button class="px-4 py-2 hover:bg-gray-50 font-medium text-sm text-gray-500">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
             </button>
             <div class="px-4 py-2 border-l border-r border-gray-300 text-sm font-medium hover:bg-gray-50 cursor-pointer">
               Aujourd'hui
             </div>
             <div class="px-4 py-2 text-sm font-bold text-gray-900 border-r border-gray-300 hover:bg-gray-50 cursor-pointer">
               samedi 4 avr., 2026
             </div>
             <button class="px-4 py-2 hover:bg-gray-50 font-medium text-sm text-gray-600">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
             </button>
           </div>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
          
          <!-- Table 1 -->
          <div>
            <h2 class="font-bold text-xl mb-4">Récapitulatif des transactions</h2>
            
            <div class="bg-white border top-0 border-gray-200 rounded-xl shadow-sm overflow-hidden">
              <table class="w-full text-sm">
                <thead>
                  <tr class="border-b border-gray-200">
                    <th class="text-left font-bold py-4 px-4">Type d'article</th>
                    <th class="text-right font-bold py-4 px-4">Qté vendue</th>
                    <th class="text-right font-bold py-4 px-4">Qté remboursée</th>
                    <th class="text-right font-bold py-4 px-4 w-28">Total brut</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Prestations</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Prestations complémentaires</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Produits</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Expédition</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Cartes cadeaux</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Abonnements</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Frais d'annulation tardive</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Table 2 -->
          <div>
            <h2 class="font-bold text-xl mb-4">Récapitulatif des mouvements de trésorerie</h2>
            
             <div class="bg-white border top-0 border-gray-200 rounded-xl shadow-sm overflow-hidden">
              <table class="w-full text-sm">
                <thead>
                  <tr class="border-b border-gray-200">
                    <th class="text-left font-bold py-4 px-4">Type de paiement</th>
                    <th class="text-right font-bold py-4 px-4">Paiements reçus</th>
                    <th class="text-right font-bold py-4 px-4">Remboursements versés</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Espèces</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Autre</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Échanges de carte cadeau</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                   <tr class="hover:bg-gray-50 transition-colors group border-t-2 border-gray-200">
                    <td class="px-4 py-4 font-bold text-gray-900">Paiements reçus</td>
                    <td class="px-4 py-4 text-right font-bold">0,00 MAD</td>
                    <td class="px-4 py-4 text-right font-bold">0,00 MAD</td>
                  </tr>
                  <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="px-4 py-4 font-medium text-gray-900">Dont pourboires</td>
                    <td class="px-4 py-4 text-right">-</td>
                    <td class="px-4 py-4 text-right">0,00 MAD</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const showExportMenu = ref(false);
</script>
