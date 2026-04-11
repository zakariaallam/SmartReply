<template>
  <div class="h-full w-full flex overflow-hidden">
    
    <!-- Main Calendar Area -->
    <div class="flex-grow flex flex-col h-full bg-white relative">
      
      <!-- Toolbar Context (injected into layout via Portal or drawn here if standalone header) -->
      <!-- We will inject controls directly into our own header area for the Calendar, underneath the main layout header -->
      <div class="h-16 border-b border-gray-200 flex items-center px-4 shrink-0 bg-white sticky top-0 z-20 shadow-sm gap-2">
        <button class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors">
          Aujourd'hui
        </button>
        
        <div class="flex items-center">
          <button class="w-10 h-10 border border-gray-300 bg-white rounded-l-full flex items-center justify-center hover:bg-gray-50 flex-shrink-0 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <div class="h-10 border-t border-b border-gray-300 flex items-center px-4 bg-white text-sm font-medium w-32 justify-center">
            sam. 4 avr.
          </div>
          <button class="w-10 h-10 border border-gray-300 bg-white rounded-r-full flex items-center justify-center hover:bg-gray-50 flex-shrink-0 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>

        <button class="px-4 py-2 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors flex items-center gap-2">
          <span>Équipe programmée</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        
         <button class="w-10 h-10 bg-white border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-50 transition-colors flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
          </svg>
        </button>

        <div class="ml-auto flex items-center gap-2">
           <button class="w-10 h-10 rounded-full hover:bg-gray-100 flex justify-center items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
             </svg>
           </button>
           <button class="w-10 h-10 rounded-full hover:bg-gray-100 flex justify-center items-center">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
             </svg>
           </button>
           <button class="px-4 py-2 border border-gray-300 rounded-full hover:bg-gray-50 flex items-center gap-1 font-medium text-sm">
             Jour <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
           </button>

           <div class="relative ml-2">
             <button @click="showAddMenu = !showAddMenu" class="px-5 py-2 bg-gray-900 border border-gray-900 text-white rounded-full hover:bg-black flex items-center gap-2 font-medium text-sm">
               Ajouter <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
             </button>
             
             <!-- Add Menu Dropdown -->
             <div v-if="showAddMenu" class="absolute right-0 top-12 w-64 bg-white border border-gray-200 shadow-xl rounded-xl py-2 z-50 text-sm">
                <ul>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Rendez-vous</a></li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg> Rendez-vous pour plusieurs personnes</a></li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Créneau bloqué</a></li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg> Vente</a></li>
                  <li><a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50"><svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg> Paiement rapide</a></li>
                </ul>
             </div>
             <!-- Clickaway view -->
             <div v-if="showAddMenu" @click="showAddMenu = false" class="fixed inset-0 z-40"></div>
           </div>

        </div>
      </div>

      <!-- Calendar Grid Body -->
      <div class="flex-grow flex relative overflow-auto">
        <!-- Time Column -->
        <div class="w-16 flex-shrink-0 border-r border-gray-200 sticky left-0 bg-white z-10 pt-[70px]">
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative">
            <span class="absolute -top-3 bg-white px-1">12:00</span>
          </div>
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative">
            <span class="absolute -top-3 bg-white px-1">13:00</span>
          </div>
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative" style="color: #ef4444">
            <span class="absolute top-[16px] bg-white px-1 rounded-full border border-red-500 z-30 inline-block font-mono text-[10px]" style="transform:translateY(1px)">14:31</span>
            <span class="absolute -top-3 bg-white px-1 text-black">14:00</span>
          </div>
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative">
            <span class="absolute -top-3 bg-white px-1">15:00</span>
          </div>
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative">
            <span class="absolute -top-3 bg-white px-1">16:00</span>
          </div>
          <div class="h-20 border-b border-gray-100 flex justify-center py-2 text-xs font-bold w-full relative">
            <span class="absolute -top-3 bg-white px-1">17:00</span>
          </div>
        </div>

        <!-- Columns Container -->
        <div class="flex-grow flex min-w-[600px] h-fit">

          <!-- Current Time Indicator Line cross all cols -->
          <div class="absolute left-16 right-0 border-t border-red-500 z-20 pointer-events-none" style="top:250px;"></div>

          <!-- Col 1 (RV) -->
          <div class="flex-1 border-r border-gray-200 relative pt-[70px] min-h-[600px]">
            <!-- Column Header -->
            <div class="absolute top-0 left-0 w-full h-[70px] border-b border-gray-200 flex flex-col items-center justify-center bg-white z-10">
              <div class="w-[40px] h-[40px] rounded-full border-2 border-[#81d4fa] text-[#0277bd] bg-blue-50 flex items-center justify-center text-sm font-bold mb-1">RV</div>
              <div class="text-xs font-bold">rovi vigo <svg class="inline w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg></div>
            </div>

            <!-- Grid Lines -->
            <div class="h-10 border-b border-gray-100" v-for="n in 12" :key="n"></div>

             <!-- Blocked Time -->
            <div class="absolute w-[calc(100%-8px)] left-1 bg-[#81d4fa] rounded border-l-4 border-[#0277bd] p-2 text-sm z-10 overflow-hidden cursor-pointer shadow-sm hover:shadow"
                 style="top: 70px; height: 75px;">
            </div>

             <!-- Appointment Block -->
            <div class="absolute w-[calc(100%-8px)] left-1 bg-[#81d4fa] rounded border-l-4 border-[#0277bd] p-2 text-sm z-10 overflow-hidden cursor-pointer shadow-sm hover:shadow"
                 style="top: 150px; height: 95px;">
                 <div class="font-bold flex justify-between tracking-tight text-[11px] leading-tight mb-1">
                   <span>13:00 - 14:30 <span class="font-normal text-xs text-gray-800">Jane Doe</span></span>
                 </div>
                 <div class="text-[11px] font-semibold text-gray-800 leading-tight">Brushing</div>
            </div>
            
            <!-- Partial block visual -->
            <div class="absolute w-[calc(100%-8px)] left-1 z-0 pointer-events-none" style="top: 150px; height: 95px;">
              <div class="absolute -right-2 top-0 h-4 border-r-2 border-dashed border-[#d1c4e9] w-4 opacity-50 bg-[#e1bee7] rounded-r"></div>
            </div>

          </div>

          <!-- Col 2 (Wendy) -->
          <div class="flex-1 border-r border-gray-200 relative pt-[70px] min-h-[600px]">
             <!-- Column Header -->
            <div class="absolute top-0 left-0 w-full h-[70px] border-b border-gray-200 flex flex-col items-center justify-center bg-white z-10">
              <div class="w-[40px] h-[40px] rounded-full border border-gray-300 overflow-hidden mb-1">
                 <img src="https://i.pravatar.cc/100?img=5" class="w-full h-full object-cover">
              </div>
              <div class="text-xs font-bold">Wendy Smith</div>
            </div>
            
            <!-- Grid Lines -->
            <div class="h-10 border-b border-gray-100" v-for="n in 12" :key="n"></div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Mini Right Sidebar Guide (Toggled/Persistent) -->
    <div v-if="showGuide" class="w-[340px] flex-shrink-0 bg-white border-l border-gray-200 h-full flex flex-col z-30 shadow-xl overflow-hidden relative">
      <button @click="showGuide = false" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center rounded-full bg-white text-gray-600 shadow border border-gray-200 z-10 hover:bg-gray-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <!-- Head Banner -->
      <div class="bg-gradient-to-r from-blue-600 to-indigo-500 p-6 pt-10 text-white relative h-[180px]">
        <div class="text-xs font-bold tracking-wide uppercase mb-2 opacity-80">Apprenant légendaire</div>
        <h2 class="text-xl font-bold leading-tight mb-4">Découvrez comment utiliser votre nouveau compte Fresha.</h2>
        <div class="flex gap-3">
          <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center"><svg class="w-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg></div>
          <div class="w-8 h-8 rounded-full border border-blue-300 flex items-center justify-center opacity-70"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
          <div class="w-8 h-8 rounded-full border border-blue-300 flex items-center justify-center opacity-70"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg></div>
        </div>
      </div>
      
      <div class="flex-grow bg-gray-50 flex flex-col items-center p-6 pt-4 overflow-y-auto">
        
        <!-- Video thumbnail mockup -->
        <div class="w-full h-40 bg-pink-100 rounded-xl overflow-hidden relative shadow mb-6 relative group cursor-pointer border border-pink-200">
           <img src="https://images.unsplash.com/photo-1590623253597-21a5addfa2d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="w-full h-full object-cover">
           <div class="absolute inset-0 bg-black/20 flex flex-col justify-end p-4">
             <div class="text-white font-serif text-2xl drop-shadow-md">selfcare just got <span class="font-bold">fresha</span></div>
           </div>
           
           <div class="absolute bottom-4 left-4 w-10 h-10 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/40">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
             </svg>
           </div>
        </div>

        <!-- Checklist -->
        <div class="w-full space-y-3 mb-6">
          <div class="bg-white border text-sm font-medium border-gray-200 rounded-xl px-4 py-4 flex items-center shadow-sm">
            <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 border border-green-200 flex items-center justify-center mr-3 font-bold text-xs"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg></div>
            <span class="text-gray-500">Créez votre compte Fresha</span>
            <div class="ml-auto w-6 h-6 rounded-full bg-green-500 text-white flex items-center justify-center"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg></div>
          </div>
          
          <div class="bg-white border text-sm font-medium border-gray-200 rounded-xl px-4 py-4 flex items-center shadow-sm cursor-pointer hover:border-gray-300">
            <div class="w-6 h-6 rounded-full text-blue-600 border-2 border-blue-600 flex items-center justify-center mr-3 font-bold text-xs shrink-0">2</div>
            <span>Créez votre premier rendez-vous</span>
            <svg class="ml-auto w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
          
          <div class="bg-white border text-sm font-medium border-gray-200 rounded-xl px-4 py-4 flex items-center shadow-sm cursor-pointer hover:border-gray-300">
            <div class="w-6 h-6 rounded-full text-blue-600 border-2 border-blue-600 flex items-center justify-center mr-3 font-bold text-xs shrink-0">3</div>
            <span>Encaissez le règlement d'un rendez-vous</span>
            <svg class="ml-auto w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
        </div>
        
        <button class="text-gray-500 hover:text-gray-800 text-sm flex items-center gap-1 font-medium transition-colors">
          Ignorer ce guide <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
const showAddMenu = ref(false);
const showGuide = ref(true);
</script>
