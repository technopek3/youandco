<div class="mobile-menu hidden sm:hidden">
          <div class="fixed inset-0 flex z-40">
            <div  class="fixed inset-0">
              <div  class=" absolute inset-0 bg-gray-600 opacity-75"></div>
            </div>
            <div  class="box relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
              <div onclick="menu_troggle()" class="absolute top-0 right-0 -mr-14 p-1">
                <button onclick="menu_troggle()" class="menu-troggle flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar">
                  <svg onclick="menu_troggle()" class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewbox="0 0 24 24">
                    <path onclick="menu_troggle()" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
              <div class="flex-shrink-0 flex items-center px-4">
                <img class="h-8 w-auto" src="https://static.shuffle.dev/uploads/files/64/6462a26bacd9063f11d873dbd5d0b7ce92bc2da2/logo.png" alt="">
              </div>
              <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="px-2">
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium focus:outline-none transition ease-in-out duration-150 focus:bg-orange-200 hover:bg-orange-100 active:orange-200 @if(Route::is('management.dashboard')) bg-orange-50 border-orange-600 text-orange-600 group border-l-4 @else hover:text-gray-900 text-gray-600  @endif" href="reservations.html">
                    <svg class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-400 group-focus:text-gray-600 transition ease-in-out duration-150" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span>Tableau de bord</span>
                  </a>
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium text-gray-600over:text-gray-900  focus:outline-none focus:text-gray-900  transition ease-in-out duration-150 focus:bg-orange-200  hover:bg-orange-100 active:orange-200" href="reservations.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 " fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    <span>Réservations</span>
                  </a>
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium text-gray-600over:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 focus:bg-orange-200 hover:bg-orange-100 active:orange-200" href="prestataires.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 " fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span>Prestataires</span>
                  </a>
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium text-gray-600over:text-gray-900 focus:outline-none focus:text-gray-900  transition ease-in-out duration-150 focus:bg-orange-200 hover:bg-orange-100 active:orange-200" href="clients.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 " fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span>Clients</span>
                  </a>
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium text-gray-600over:text-gray-900  focus:outline-none focus:text-gray-900  transition ease-in-out duration-150 focus:bg-orange-200 hover:bg-orange-100 active:orange-200" href="paiements.html">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 " fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Paiement</span>
                  </a>
                  <a class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium text-gray-600over:text-gray-900  focus:outline-none focus:text-gray-900 transition ease-in-out duration-150 focus:bg-orange-200 hover:bg-orange-100 active:orange-200"  href="{{route('pro.settings.edit')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 " fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Paramètres</span>
                  </a>
                </nav>
              </div>
            </div>
            <div  class="flex-shrink-0 w-14"></div>
          </div>
        </div>