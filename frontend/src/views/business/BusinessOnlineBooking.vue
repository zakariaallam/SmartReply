<template>
  <div class="h-full flex bg-gradient-to-br from-white via-[#f0fafc] to-[#e6fcf5]">
    <!-- Sub-navigation Sidebar -->
    <div class="w-64 bg-white/80 backdrop-blur-md border-r border-gray-200/50 flex-shrink-0 flex flex-col hidden md:flex h-full">
      <div class="p-4 flex items-center justify-between h-16">
        <h2 class="font-bold text-lg">Réservation en ligne</h2>
        <button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 text-gray-500 border border-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
      </div>
      <div class="py-2 flex-grow">
        <div class="px-3 space-y-1">
          <a href="#" class="block px-3 py-2.5 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">Profil sur la marketplace</a>
          <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Réserver avec Google</a>
          <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Réservations Facebook<br>et Instagram</a>
          <a href="#" class="block px-3 py-2.5 text-gray-700 hover:bg-gray-50 rounded-lg text-sm font-medium">Générateur de liens</a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center p-12 overflow-y-auto">
      <div class="max-w-5xl w-full flex flex-col lg:flex-row items-center gap-16">
        
        <!-- Left Text -->
        <div class="flex-1">
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
            Attirez de nouveaux clients grâce aux réservations en ligne
          </h1>
          <p class="text-lg text-gray-700 mb-8 max-w-md">
            Rejoignez la plus grande marketplace au monde dédiée à la beauté et au bien-être.
          </p>
          
          <ul class="space-y-4 mb-10 text-gray-800">
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Faites figurer votre entreprise sur l'application Fresha.</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Faites découvrir votre établissement à des milliers de nouveaux clients qui utilisent Fresha tous les jours.</span>
            </li>
            <li class="flex items-start gap-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Gagnez du temps et offrez à vos clients la possibilité de prendre eux-mêmes leurs rendez-vous en ligne 24 heures sur 24, 7 jours sur 7.</span>
            </li>
          </ul>
          
          <div class="flex items-center gap-6">
            <button class="bg-black text-white px-8 py-3 rounded-full font-bold text-sm hover:bg-gray-800 transition-colors">
              Lancez-vous
            </button>
            <button class="text-gray-900 font-bold text-sm hover:underline">
              En savoir plus
            </button>
          </div>
        </div>

        <!-- Right App Mockup -->
        <div class="flex-1 flex justify-center lg:justify-end relative h-[600px] w-full mt-10 lg:mt-0 perspective-1000">
           <!-- Main App Card overlapping a slightly rotated Map background card -->
           
           <!-- Map / Background Phone -->
           <div class="absolute right-0 top-10 w-[280px] h-[550px] bg-white rounded-[35px] shadow-xl border-4 border-white overflow-hidden" style="transform: rotate(4deg) scale(0.95); transform-origin: top right;">
             <!-- Fake Map header -->
             <div class="h-14 bg-gray-50 flex items-center px-4 border-b border-gray-100 justify-between">
                <div class="text-xs font-bold bg-white px-3 py-1.5 rounded border border-gray-200 shadow-sm">Hair <span class="text-gray-400 font-normal">Any date</span></div>
                <div class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center">
                  <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                </div>
             </div>
             <!-- Fake Map graphic -->
             <div class="h-64 bg-emerald-50 relative overflow-hidden">
                <div class="absolute inset-0 opacity-40 bg-[url('https://maps.wikimedia.org/osm-intl/14/8193/5431.png')] bg-cover bg-center mix-blend-multiply"></div>
                <div class="absolute top-[30%] left-[40%] rounded-full bg-white shadow-lg px-2 py-1 flex items-center gap-1 text-[10px] font-bold"><div class="w-2 h-2 rounded-full bg-black"></div> 4.9</div>
                <div class="absolute top-[60%] left-[20%] rounded-full bg-indigo-600 text-white shadow-lg px-2 py-1 flex items-center gap-1 text-[10px] font-bold"><div class="w-2 h-2 rounded-full bg-white"></div> 5.0</div>
             </div>
             <!-- Map listing item underneath -->
             <div class="p-3 bg-gray-50 h-full">
                <div class="text-xs font-bold text-center text-gray-400 mb-2">1k+ venues nearby</div>
                <div class="bg-white rounded-xl shadow-sm overflow-hidden flex flex-col h-40">
                  <div class="h-24 bg-gray-200 w-full overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1593702288056-b076722dceea?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&h=150&q=80" class="w-full h-full object-cover">
                  </div>
                  <div class="p-2">
                    <div class="text-xs font-bold">Vintage Studio</div>
                    <div class="text-[10px] text-gray-500">4.8 (724)</div>
                  </div>
                </div>
             </div>
           </div>

           <!-- Foreground Primary Phone Mockup -->
           <div class="absolute right-20 top-0 w-[290px] h-[580px] bg-white text-gray-900 rounded-[35px] shadow-2xl border-4 border-gray-100 overflow-hidden z-10 flex flex-col">
             <!-- Notch Header -->
             <div class="h-6 flex justify-center relative absolute top-0 w-full">
               <div class="w-32 h-5 bg-gray-100 rounded-b-xl"></div>
             </div>
             
             <!-- Image Header -->
             <div class="h-[220px] bg-gray-200 relative shrink-0">
               <img src="https://images.unsplash.com/photo-1516975080661-460d3c63ac1b?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover">
               <!-- Badges overlay -->
               <div class="absolute bottom-2 right-2 bg-black/50 text-white text-[10px] px-2 py-0.5 rounded backdrop-blur-md">1/4</div>
               <button class="absolute top-4 right-4 w-8 h-8 rounded-full bg-white flex items-center justify-center shadow">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
               </button>
             </div>
             
             <!-- Studio Info Profile Area -->
             <div class="flex-grow bg-white p-5 flex flex-col relative">
                <h3 class="font-bold text-xl mb-1">Trendy Studio</h3>
                <div class="flex items-center gap-1 text-sm mb-1">
                  <span class="font-bold">4.8</span>
                  <div class="flex text-gray-900"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></div>
                  <span class="text-blue-600 font-medium text-[11px] hover:underline cursor-pointer">(734)</span>
                </div>
                <div class="text-[11px] text-gray-500 mb-3">2.0km • Notting Hill, London</div>
                
                <span class="bg-indigo-50 text-indigo-700 text-[10px] font-bold px-2 py-0.5 rounded w-fit mb-4 border border-indigo-100">Featured</span>
                
                <div class="space-y-3 mb-6">
                  <div class="flex items-center gap-3 text-xs">
                    <svg class="w-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>Open now 10am - 8pm</span>
                  </div>
                  <div class="flex items-center gap-3 text-xs">
                    <svg class="w-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    <span>Instant booking</span>
                  </div>
                  <div class="flex items-center gap-3 text-xs">
                    <svg class="w-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                    <span>Pay by app</span>
                  </div>
                  <div class="flex items-center gap-3 text-xs">
                    <svg class="w-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" /></svg>
                    <span>Wheelchair accessible</span>
                  </div>
                </div>
                
                <!-- Bottom sticky action area inside phone app -->
                <div class="mt-auto border-t border-gray-100 flex items-center justify-between pt-4 pb-2">
                  <div class="text-[10px] text-gray-500 font-medium">273 services available</div>
                  <button class="bg-black text-white px-5 py-2 rounded-full text-xs font-bold shadow-md">Book now</button>
                </div>
             </div>
             
             <!-- Fake App Bottom Navigation -->
             <div class="h-12 border-t border-gray-200 bg-white flex justify-around items-center px-4 shrink-0 pb-1">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                <div class="text-indigo-600 flex flex-col items-center">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                  <div class="w-1 h-1 bg-indigo-600 rounded-full mt-0.5"></div>
                </div>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
             </div>
           </div>

        </div>

      </div>
    </div>
  </div>
</template>

<script setup>
</script>
