<template>
  <div class="h-full flex bg-gray-50 overflow-y-auto">
    <div class="max-w-5xl mx-auto w-full p-8">
      
      <div class="mb-10">
        <h1 class="text-3xl font-bold mb-2">Paramètres de l'espace de travail</h1>
        <p class="text-gray-500">Gérez les paramètres pour fitfocuspro.</p>
      </div>

      <!-- Tabs -->
      <div class="flex space-x-6 border-b border-gray-200 mb-8 overflow-x-auto pb-px">
        <button class="pb-3 border-b-2 border-black font-bold whitespace-nowrap text-sm text-black">
          <span class="bg-black text-white px-4 py-1.5 rounded-full text-xs mr-2">Paramètres</span>
        </button>
        <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-bold whitespace-nowrap text-sm mt-1">
          Présence en ligne
        </button>
        <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-bold whitespace-nowrap text-sm mt-1">
          Marketing
        </button>
        <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-bold whitespace-nowrap text-sm mt-1">
          Autre
        </button>
      </div>

      <!-- Settings Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        
        <!-- Card 1 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Configuration de l'entreprise</h3>
          <p class="text-sm text-gray-500 leading-tight">Personnalisez les informations de l'entreprise et gérez les points de vente.</p>
        </a>

        <!-- Card 2 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Planification</h3>
          <p class="text-sm text-gray-500 leading-tight">Configurez vos disponibilités, gérez les ressources réservables et les préférences de réservation en ligne.</p>
        </a>

        <!-- Card 3 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Ventes</h3>
          <p class="text-sm text-gray-500 leading-tight">Configurez les modes de paiement, les taxes, les reçus, les frais de service et les cartes cadeaux.</p>
        </a>

        <!-- Card 4 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Clients</h3>
          <p class="text-sm text-gray-500 leading-tight">Personnalisez les sources des clients et gérez les étiquettes des clients.</p>
        </a>

        <!-- Card 5 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Facturation</h3>
          <p class="text-sm text-gray-500 leading-tight">Gérez les factures Fresha, le solde de messages, les modules supplémentaires et la facturation.</p>
        </a>

        <!-- Card 6 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Équipe</h3>
          <p class="text-sm text-gray-500 leading-tight">Gérez les autorisations, les rémunérations et les absences.</p>
        </a>
        
        <!-- Card 7 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
             <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Formulaires</h3>
          <p class="text-sm text-gray-500 leading-tight">Configurez des modèles pour les...</p>
        </a>

        <!-- Card 8 -->
        <a href="#" class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-gray-300 transition-all flex flex-col h-44">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
             <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
          </svg>
          <h3 class="font-bold text-[17px] mb-1">Paiements</h3>
          <p class="text-sm text-gray-500 leading-tight">Configurez les modes de paiement, les...</p>
        </a>

      </div>
    </div>
  </div>
</template>

<script setup>
</script>
