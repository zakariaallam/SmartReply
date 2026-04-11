<template>
  <div class="h-full flex bg-gray-50 overflow-hidden">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex h-full">
      <div class="px-6 py-6 border-b border-gray-100">
        <h2 class="font-bold text-lg tracking-tight">Catalogue</h2>
      </div>
      <nav class="flex-grow py-4 px-3 space-y-1">
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-indigo-50 text-indigo-700">Catalogue de prestations</a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Abonnements</a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Produits</a>
        
        <div class="pt-6 pb-2 px-3 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Inventaire</div>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Inventaires</a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Commandes de stock</a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Fournisseurs</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col h-full overflow-hidden">
      <!-- Content Header -->
      <div class="bg-white px-8 py-6 border-b border-gray-200 flex justify-between items-start flex-shrink-0">
        <div>
          <h1 class="text-3xl font-bold tracking-tight mb-1">Catalogue de prestations</h1>
          <p class="text-sm text-gray-500">Consultez et gérez les prestations offertes par votre entreprise. <a href="#" class="text-indigo-600 hover:underline">En savoir plus</a></p>
        </div>
        <div class="flex items-center gap-3">
          <button class="px-5 py-2.5 bg-white border border-gray-200 rounded-full text-sm font-bold hover:bg-gray-50 shadow-sm flex items-center gap-2">
            Options
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
          </button>
          <button class="px-6 py-2.5 bg-black text-white rounded-full text-sm font-bold hover:bg-gray-800 shadow transition-colors">
            Ajouter
          </button>
        </div>
      </div>

      <!-- Content Body -->
      <div class="flex-grow overflow-y-auto p-8">
        <div class="max-w-6xl mx-auto space-y-8">
          
          <!-- Search and Filter -->
          <div class="flex items-center gap-4">
            <div class="relative flex-grow max-w-md">
              <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </span>
              <input type="text" placeholder="Recherchez un nom de prestation" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-full text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 bg-white shadow-sm">
            </div>
            <button class="px-5 py-2.5 bg-white border border-gray-200 rounded-full text-sm font-bold hover:bg-gray-50 shadow-sm flex items-center gap-2">
              Filtres
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" /></svg>
            </button>
            <div class="ml-auto">
               <button class="flex items-center gap-2 text-sm font-bold text-gray-700 hover:text-black">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" /></svg>
                 Gérer l'ordre
               </button>
            </div>
          </div>

          <div class="flex flex-col lg:flex-row gap-8 items-start">
            <!-- Left: Categories Card -->
            <div class="w-full lg:w-1/3 bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
              <h3 class="font-bold text-lg mb-6">Catégories</h3>
              <nav class="space-y-1">
                <a href="#" class="flex items-center justify-between px-3 py-3 rounded-lg bg-indigo-50 text-indigo-700 font-bold text-sm">
                  Toutes les catégories
                  <span class="bg-indigo-100 text-indigo-600 px-2 py-0.5 rounded-full text-xs">2</span>
                </a>
                <a href="#" class="flex items-center justify-between px-3 py-3 rounded-lg text-gray-700 hover:bg-gray-50 font-medium text-sm">
                  Coupes et coiffures
                  <span class="bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full text-xs">2</span>
                </a>
                <button class="w-full text-left px-3 py-3 text-indigo-600 font-bold text-sm hover:underline mt-4">
                  Ajouter une catégorie
                </button>
              </nav>
            </div>

            <!-- Right: Services List -->
            <div class="w-full lg:w-2/3 space-y-6">
              <div class="flex items-center justify-between">
                <h3 class="font-bold text-xl">Coupes et coiffures</h3>
                <button class="flex items-center gap-2 px-4 py-1.5 bg-white border border-gray-200 rounded-full text-sm font-bold hover:bg-gray-50 shadow-sm">
                  Actions
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
              </div>

              <div class="space-y-4">
                <!-- Service 1 -->
                <div class="bg-white border-l-4 border-l-blue-400 border border-gray-200 rounded-r-xl p-5 shadow-sm hover:shadow-md transition-shadow flex items-center justify-between group">
                  <div>
                    <h4 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Coupe</h4>
                    <p class="text-sm text-gray-500">1h et 30 min</p>
                  </div>
                  <div class="flex items-center gap-6">
                    <span class="font-bold text-gray-900">25 MAD</span>
                    <button class="text-gray-400 hover:text-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg>
                    </button>
                  </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white border-l-4 border-l-teal-400 border border-gray-200 rounded-r-xl p-5 shadow-sm hover:shadow-md transition-shadow flex items-center justify-between group">
                  <div>
                    <h4 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Brushing</h4>
                    <p class="text-sm text-gray-500">1h et 30 min</p>
                  </div>
                  <div class="flex items-center gap-6">
                    <span class="font-bold text-gray-900">25 MAD</span>
                    <button class="text-gray-400 hover:text-gray-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" /></svg>
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
