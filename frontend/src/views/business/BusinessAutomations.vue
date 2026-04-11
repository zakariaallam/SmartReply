<template>
  <div class="h-full flex bg-gray-50">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex">
      <div class="p-4 flex items-center justify-between border-b border-gray-100 h-16">
        <h2 class="font-bold text-lg">Promotion</h2>
        <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
      </div>
      <div class="py-2 overflow-y-auto flex-grow">
        <div class="px-3 mb-4">
          <div class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2 px-3">Messagerie</div>
          <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Campagnes de masse</a>
          <a href="#" class="block px-3 py-2 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium mt-1">Automatisations</a>
          <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mt-1">Historique des messages</a>
        </div>
        
        <div class="px-3 mb-4">
          <div class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2 px-3">Promotion</div>
          <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Offres</a>
          <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mt-1">Tarification intelligente</a>
        </div>

        <div class="px-3 mb-4">
          <div class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2 px-3">Engagement</div>
          <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Avis</a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-8 overflow-y-auto">
      <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-start mb-8">
          <div>
            <h1 class="text-3xl font-bold mb-2">Automatisations</h1>
            <p class="text-gray-500">Consultez et gérez tous les messages automatiques envoyés à vos clients. <a href="#" class="text-indigo-600 hover:underline">En savoir plus</a></p>
          </div>
          <div class="bg-white border border-gray-200 rounded-xl px-4 py-3 flex items-center gap-4 shadow-sm">
            <div>
              <div class="text-xs text-gray-500 font-medium">Solde de messagerie</div>
              <div class="font-bold text-lg">0 MAD</div>
            </div>
            <button class="text-gray-400 hover:text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Banner -->
        <div class="bg-[#5964ff] text-white rounded-xl p-6 mb-8 shadow-md">
          <h2 class="font-bold text-lg mb-2">Garantissez l'envoi de vos messages grâce aux recharges automatiques.</h2>
          <p class="text-white/80 mb-4">Empêchez votre solde de tomber à zéro pour garantir l'envoi ininterrompu de vos messages à vos clients.</p>
          <button class="font-medium hover:underline flex items-center gap-2">
            Configurer <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </button>
        </div>

        <!-- Tabs -->
        <div class="flex space-x-6 border-b border-gray-200 mb-8 overflow-x-auto pb-px">
          <button class="pb-3 border-b-2 border-black font-bold whitespace-nowrap text-sm">
            <span class="bg-black text-white px-3 py-1 rounded-full text-xs mr-2">Rappels</span>
          </button>
          <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-medium whitespace-nowrap text-sm">
            Notifications de rendez-vous
          </button>
          <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-medium whitespace-nowrap text-sm">
            Mises à jour de la liste d'attente
          </button>
          <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-medium whitespace-nowrap text-sm">
            Augmenter les réservations
          </button>
          <button class="pb-3 border-b-2 border-transparent text-gray-500 hover:text-gray-800 font-medium whitespace-nowrap text-sm">
            Célébrer les étapes impo...
          </button>
        </div>

        <h2 class="text-2xl font-bold mb-6">Rappels</h2>
        
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          
          <!-- Card 1 -->
          <div class="bg-white border border-emerald-500/30 rounded-xl p-6 shadow-sm flex flex-col cursor-pointer transition-shadow hover:shadow-md h-64 relative">
             <div class="w-10 h-10 flex items-center justify-center rounded-full bg-orange-50 text-orange-500 mb-4">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
             </div>
             <h3 class="font-bold text-lg leading-tight mb-2">Rappel de rendez-vous<br>à venir dans 24 heures</h3>
             <p class="text-gray-500 text-sm mb-auto">Notifie les clients de leurs rendez-vous à venir.</p>
             
             <div class="flex items-center justify-between mt-4">
               <span class="bg-emerald-50 text-emerald-600 text-xs font-bold px-2 py-1 rounded">Activé</span>
               <div class="flex gap-2 text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
               </div>
             </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white border border-emerald-500/30 rounded-xl p-6 shadow-sm flex flex-col cursor-pointer transition-shadow hover:shadow-md h-64 relative">
             <div class="w-10 h-10 flex items-center justify-center rounded-full bg-orange-50 text-orange-500 mb-4">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
             </div>
             <h3 class="font-bold text-lg leading-tight mb-2">Rappel de rendez-vous<br>à venir dans 1 heure</h3>
             <p class="text-gray-500 text-sm mb-auto">Notifie les clients de leurs rendez-vous à venir.</p>
             
             <div class="flex items-center justify-between mt-4">
               <span class="bg-emerald-50 text-emerald-600 text-xs font-bold px-2 py-1 rounded">Activé</span>
               <div class="flex gap-2 text-gray-400">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
               </div>
             </div>
          </div>

          <!-- Add New Card -->
          <div class="bg-white border border-gray-200 border-dashed rounded-xl p-6 shadow-sm flex flex-col items-center justify-center cursor-pointer transition-colors hover:bg-gray-50 h-64 relative text-indigo-600">
             <div class="w-12 h-12 flex items-center justify-center rounded-full border-2 border-indigo-100 bg-indigo-50 mb-3">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
             </div>
             <span class="font-bold text-lg">Nouveau</span>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
