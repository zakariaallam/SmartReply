<template>
  <div class="h-full flex bg-gray-50">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex h-full">
      <div class="px-3 pt-6 pb-2">
        <h2 class="font-bold text-lg px-2 tracking-tight">Rapports</h2>
      </div>
      <div class="py-2 overflow-y-auto flex-grow flex flex-col gap-1 px-3">
        
        <a href="#" class="flex items-center justify-between px-3 py-2 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" /></svg>
            Tous les rapports
          </div>
          <span class="bg-white/50 px-2 py-0.5 rounded-full text-xs font-bold text-indigo-500">53</span>
        </a>
        
        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
            Favoris
          </div>
          <span class="text-xs font-bold text-gray-400">0</span>
        </a>

        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            Tableaux de bord
          </div>
          <span class="text-xs font-bold text-gray-400">3</span>
        </a>

        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">
           <div class="flex items-center gap-3">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>
             Standard
           </div>
           <span class="text-xs font-bold text-gray-400">45</span>
        </a>
        
        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">
           <div class="flex items-center gap-3">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
             Supérieur
           </div>
           <span class="text-xs font-bold text-gray-400">8</span>
        </a>

        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">
           <div class="flex items-center gap-3">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
             Personnalisés
           </div>
           <span class="text-xs font-bold text-gray-400">0</span>
        </a>
        
        <a href="#" class="flex items-center justify-between px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mb-4">
           <div class="flex items-center gap-3">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
             Objectifs
           </div>
        </a>

        <!-- Folders -->
        <div class="px-2 mt-2 mb-2"><div class="text-sm font-bold text-gray-900 tracking-tight">Dossiers</div></div>
        <a href="#" class="flex items-center gap-2 px-3 py-2 text-indigo-600 hover:bg-indigo-50 rounded-lg text-sm font-medium mb-6">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
           Ajouter un dossier
        </a>

        <!-- Connecteur de données -->
        <a href="#" class="flex items-center gap-3 px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium mb-4 mt-auto border border-gray-200">
           <div class="w-6 h-6 rounded bg-green-500 text-white flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg></div>
           Connecteur de données
        </a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow p-8 overflow-y-auto">
      <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-start mb-6">
          <div>
            <div class="flex items-center gap-3 mb-1">
              <h1 class="text-3xl font-bold tracking-tight">Rapports et analyses</h1>
              <span class="bg-gray-100 text-gray-600 border border-gray-200 px-2.5 py-0.5 rounded-full text-sm font-bold mt-1 shadow-sm">53</span>
            </div>
            <p class="text-gray-500">Accéder à tous vos rapports Fresha. <a href="#" class="text-indigo-600 hover:underline">En savoir plus</a></p>
          </div>
          
          <button class="bg-black text-white px-5 py-2.5 rounded-full font-medium hover:bg-gray-800 transition-colors text-sm shadow">
            Ajouter
          </button>
        </div>

        <!-- Filter Bar -->
        <div class="flex items-center gap-4 mb-6">
          <div class="relative max-w-sm w-full">
             <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
               </svg>
             </div>
             <input type="text" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-full leading-5 bg-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm shadow-sm hover:border-gray-300 transition-colors" placeholder="Rechercher par nom ou description de rapport">
          </div>
          <div class="ml-auto flex items-center gap-3">
            <button class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2">
              Créé par
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
             <button class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 flex items-center gap-2">
              Catégorie
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Horizontal Tabs -->
        <div class="flex space-x-2 border-b border-gray-200 mb-6 overflow-x-auto pb-2">
          <button class="px-4 py-1.5 bg-black text-white rounded-full font-medium text-sm whitespace-nowrap shadow">Tous les rapports</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Ventes</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Finance</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Rendez-vous</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Équipe</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Clients</button>
          <button class="px-4 py-1.5 text-gray-700 hover:bg-gray-100 rounded-full font-medium text-sm whitespace-nowrap transition-colors">Inventaire</button>
        </div>

        <!-- Reports List -->
        <div class="space-y-4">
          
          <!-- Card 1 -->
          <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow hover:border-gray-300 transition-all flex items-center group cursor-pointer">
            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-green-50 text-green-600 mr-5 shrink-0 border border-green-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Tableau de bord des performances</h3>
              <p class="text-sm text-gray-500">Tableau de bord des performances de votre entreprise.</p>
            </div>
            <div class="ml-auto flex items-center">
              <button class="text-gray-300 hover:text-gray-500 p-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              </button>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow hover:border-gray-300 transition-all flex items-center group cursor-pointer">
            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-green-50 text-green-600 mr-5 shrink-0 border border-green-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Tableau de bord de la présence en ligne</h3>
              <p class="text-sm text-gray-500">Ventes en ligne et performance de la clientèle en ligne.</p>
            </div>
            <div class="ml-auto flex items-center">
              <button class="text-gray-300 hover:text-gray-500 p-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              </button>
            </div>
          </div>
          
           <!-- Card 3 -->
          <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow hover:border-gray-300 transition-all flex items-center group cursor-pointer">
            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-green-50 text-green-600 mr-5 shrink-0 border border-green-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Tableau de bord de fidélité</h3>
              <p class="text-sm text-gray-500">Tableau de bord des performances de votre programme de fidélité.</p>
            </div>
            <div class="ml-auto flex items-center">
              <button class="text-gray-300 hover:text-gray-500 p-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              </button>
            </div>
          </div>

          <!-- Card 4 (Supérieur) -->
          <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow hover:border-gray-300 transition-all flex items-center group cursor-pointer relative overflow-hidden">
            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 mr-5 shrink-0 border border-indigo-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" /></svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Récapitulatif des performances</h3>
              <p class="text-sm text-gray-500">Aperçu de la performance de l'entreprise par équipe ou par établissement.</p>
            </div>
            <div class="ml-auto flex items-center gap-4">
              <span class="bg-[#f3f0ff] text-indigo-700 text-xs font-bold px-2 py-0.5 rounded border border-indigo-100">Supérieur</span>
              <button class="text-gray-300 hover:text-gray-500 p-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              </button>
            </div>
          </div>
          
           <!-- Card 5 (Supérieur) -->
          <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm hover:shadow hover:border-gray-300 transition-all flex items-center group cursor-pointer relative overflow-hidden">
            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 mr-5 shrink-0 border border-indigo-100">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" /></svg>
            </div>
            <div>
              <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Performances au fil du temps</h3>
              <p class="text-sm text-gray-500">Aperçu des principales mesures de l'entreprise par établissement ou par membre de l'équipe au fil du temps.</p>
            </div>
            <div class="ml-auto flex items-center gap-4">
              <span class="bg-[#f3f0ff] text-indigo-700 text-xs font-bold px-2 py-0.5 rounded border border-indigo-100">Supérieur</span>
              <button class="text-gray-300 hover:text-gray-500 p-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
