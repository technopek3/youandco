<div class="relative  flex-shrink-0 flex h-16 bg-white shadow">
    <button class="menu-troggle px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden" onclick="menu_troggle()" aria-label="Open sidebar">
        <svg onclick="menu_troggle()" class="h-6 w-6" stroke="currentColor" fill="none" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">

        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button class="p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-400 focus:outline-none focus:shadow-outline focus:text-gray-400" aria-label="Notifications">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
            </button>
            <div class="ml-3 z-10 relative">
                <div>
                    <button onclick="profile_troggle()" class=" max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline" id="user-menu" aria-label="User menu" aria-haspopup="true">
                        @if(auth()->user()->getFirstMediaUrl('avatar','avatar40'))
                        <div class="h-8 w-8 bg-center bg-cover rounded-full" style="background-image: url({{auth()->user()->getFirstMediaUrl('avatar','avatar')}})"></div>
                        @else
                        <svg class="h-8 w-8 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        @endif
                    </button>
                </div>
                <div class="profile-menu hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" href="{{route('pro.profile.edit')}}" role="menuitem">Mon profil</a>
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" href="{{route('pro.settings.edit')}}" role="menuitem">Paramètres</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" onclick="event.preventDefault(); this.closest('form').submit();">
                                Se déconnecter
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>