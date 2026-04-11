<template>
  <div class="h-full flex bg-gray-50 overflow-hidden">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex-shrink-0 flex flex-col hidden md:flex h-full">
      <div class="px-6 py-6 border-b border-gray-100">
        <h2 class="font-bold text-lg tracking-tight">Clients</h2>
      </div>
      <nav class="flex-grow py-4 px-3 space-y-1">
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-indigo-50 text-indigo-700">Liste des clients</a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-700 hover:bg-gray-50">Fidélité client</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col h-full overflow-hidden">
      <!-- Content Header -->
      <div class="bg-white px-8 py-6 border-b border-gray-200 flex justify-between items-start flex-shrink-0 shadow-sm z-10">
        <div class="flex items-baseline gap-3">
          <h1 class="text-3xl font-bold tracking-tight">Liste des clients</h1>
          <span class="bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full text-sm font-bold shadow-inner">3</span>
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

      <!-- Main Scrollable Area -->
      <div class="flex-grow overflow-y-auto p-8">
        <div class="max-w-7xl mx-auto space-y-8">
          
          <!-- Promo Banner -->
          <div class="relative bg-gradient-to-r from-purple-600 to-indigo-700 rounded-2xl overflow-hidden shadow-lg group">
            <div class="p-10 flex flex-col md:flex-row items-center gap-8 relative z-10">
              <div class="max-w-xl text-white">
                <h2 class="text-2xl font-bold mb-4">Attirez de nouveaux clients grâce aux réservations en ligne</h2>
                <p class="text-indigo-100 text-sm leading-relaxed mb-6">Rejoignez la plus grande marketplace au monde dédiée à la beauté et au bien-être et offrez à vos clients la possibilité de prendre eux-mêmes leurs rendez-vous en ligne 24 heures sur 24, 7 jours sur 7.</p>
                <div class="flex items-center gap-6">
                  <button class="px-8 py-2.5 bg-white text-indigo-700 rounded-full font-bold text-sm hover:bg-indigo-50 transition-colors">Lancez-vous</button>
                  <a href="#" class="text-white text-sm font-bold hover:underline">En savoir plus</a>
                </div>
              </div>
              <div class="flex-shrink-0 relative hidden lg:block">
                 <div class="w-64 h-40 rounded-xl overflow-hidden shadow-2xl rotate-3 border-4 border-white/20">
                   <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&q=80&w=400" alt="Marketplace" class="w-full h-full object-cover">
                 </div>
                 <div class="absolute -top-6 -right-6 w-40 h-52 bg-white rounded-2xl p-1 shadow-2xl -rotate-6 hidden xl:block">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&q=80&w=400" alt="Marketplace" class="w-full h-full object-cover rounded-xl">
                 </div>
              </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-white opacity-5 rounded-full"></div>
            <div class="absolute bottom-0 left-0 -ml-8 -mb-8 w-32 h-32 bg-white opacity-5 rounded-full"></div>
            <button class="absolute top-4 right-4 text-white hover:bg-white/10 p-1.5 rounded-full transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l18 18" /></svg>
            </button>
          </div>

          <!-- Table Container -->
          <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
            <!-- Table Controls -->
            <div class="px-6 py-5 border-b border-gray-100 flex flex-wrap gap-4 items-center justify-between bg-white">
              <div class="flex items-center gap-4 flex-grow max-w-2xl">
                <div class="relative flex-grow">
                  <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                  </span>
                  <input type="text" placeholder="Nom, adresse e-mail ou numéro" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-full text-sm placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 bg-gray-50/30">
                </div>
                <button class="px-5 py-2.5 bg-white border border-gray-200 rounded-full text-sm font-bold hover:bg-gray-50 shadow-sm flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" /></svg>
                  Filtres
                </button>
              </div>
              <div class="flex items-center gap-3">
                 <span class="text-xs font-bold text-gray-500 uppercase tracking-tight">Trier par:</span>
                 <button class="px-5 py-2.5 bg-white border border-gray-200 rounded-full text-sm font-bold hover:bg-gray-50 shadow-sm flex items-center gap-2">
                  Créé le (le plus récent en premier)
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
              </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse">
                <thead>
                  <tr class="bg-gray-50/50">
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider w-10">
                       <input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    </th>
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider">Nom du client</th>
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider">Numéro de portable</th>
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider">Avis</th>
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider">Ventes</th>
                    <th class="px-6 py-4 text-[11px] font-bold text-gray-500 uppercase tracking-wider">Créé le</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                  <!-- Row 1: Jack Doe -->
                  <tr class="hover:bg-gray-50/50 transition-colors group cursor-pointer">
                    <td class="px-6 py-4"><input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded"></td>
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold shadow-sm relative overflow-hidden group-hover:scale-105 transition-transform">
                          J
                        </div>
                        <div>
                          <div class="font-bold text-gray-900">Jack Doe</div>
                          <div class="text-xs text-gray-500">jack@example.com</div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900 uppercase">0 MAD</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">4 avr. 2026</td>
                  </tr>

                  <!-- Row 2: Jane Doe -->
                  <tr class="hover:bg-gray-50/50 transition-colors group cursor-pointer">
                    <td class="px-6 py-4"><input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded"></td>
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform">
                          J
                        </div>
                        <div>
                          <div class="font-bold text-gray-900">Jane Doe</div>
                          <div class="text-xs text-gray-500">jane@example.com</div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900 uppercase">0 MAD</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">4 avr. 2026</td>
                  </tr>

                   <!-- Row 3: John Doe -->
                  <tr class="hover:bg-gray-50/50 transition-colors group cursor-pointer">
                    <td class="px-6 py-4"><input type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded"></td>
                    <td class="px-6 py-4">
                      <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform">
                          J
                        </div>
                        <div>
                          <div class="font-bold text-gray-900">John Doe</div>
                          <div class="text-xs text-gray-500">john@example.com</div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">-</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900 uppercase">0 MAD</td>
                    <td class="px-6 py-4 text-sm text-gray-500 font-medium">4 avr. 2026</td>
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
</script>
