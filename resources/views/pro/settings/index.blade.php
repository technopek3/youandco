@extends('pro.master')

@section('title')
Paramètres
@endsection
@section('head')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
@endsection

@section('content')

@include('pro.components.change_email_request')

<div class="py-4">

    @if($errors->has('email') || $errors->has('email_change_password'))
    <div class="rounded-md bg-red-50 p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">Il y a des erreurs avec votre soumission</h3>
                <div class="mt-2 text-sm text-red-700">
                    <ul role="list" class="list-disc pl-5 space-y-1">
                        @if($errors->has('email') )
                        <li>{{ $errors->first('email') }}</li>
                        @endif
                        @if($errors->has('email_change_password'))
                        <li>{{ $errors->first('email_change_password') }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif


    <div>
        <div>
            <nav class="sm:hidden">
                <a class="flex items-center text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out" href="index.html">
                    <svg class="flex-shrink-0 -ml-1 mr-1 h-5 w-5 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Retour</span>
                </a>
            </nav>
            <nav class="hidden sm:flex items-center text-sm leading-5 font-medium">
                <a class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out" href="index.html">Tableau de bord</a>
                <svg class="flex-shrink-0 mx-2 h-5 w-5 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out" href="parametres.html">Paramètres</a>


            </nav>
        </div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">

            </div>
            <div class="mt-4 flex-shrink-0 flex md:mt-0 md:ml-4">
                <span class="shadow-sm rounded-md">

                </span>
                <span class="ml-3 shadow-sm rounded-md">

                </span>
            </div>
        </div>
    </div>

    <div class="relative pb-5 border-b border-gray-200 space-y-4 sm:pb-0">
        <div class="space-y-3 md:flex md:items-center md:justify-between md:space-y-0">
            <h3 class="leading-6 font-medium text-gray-900 text-2xl">Paramètres</h3>
            <div class="flex space-x-3 md:absolute md:top-3 md:right-0">
                <span class="shadow-sm rounded-md">

                </span>
                <span class="shadow-sm rounded-md">

                </span>
            </div>
        </div>

    </div>

    <div>
        <main class="max-w-7xl mx-auto pb-10 lg:py-12 lg:px-8">

            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
                <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
                    <nav class="space-y-1">
                        <a onclick="troggle_panel('profile_section')" class="profile_section_btn link_section bg-gray-50  text-orange-600 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#">
                            <svg class="svgs text-orange-600 profile_section_svg   flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <span class="truncate">Profil</span>
                        </a>

                        <a onclick="troggle_panel('Mot_de_passe_section')" class="Mot_de_passe_section_btn link_section   hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#">
                            <svg class="svgs text-gray-400 Mot_de_passe_section_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                </path>
                            </svg>
                            <span class="truncate">Mot de passe</span>
                        </a>
                        @can('admin')
                        <a onclick="troggle_panel('joures_ferie')" class="joures_ferie_btn link_section text-gray-900  hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#" aria-current="page">
                            <svg class="svgs text-gray-400 joures_ferie_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                </path>
                            </svg>
                            <span class="truncate">Joures férié</span>
                        </a>
                        <a onclick="troggle_panel('frais_et_facturation')" class="frais_et_facturation_btn link_section text-gray-900  hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#" aria-current="page">
                            <svg class="svgs text-gray-400 frais_et_facturation_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                </path>
                            </svg>
                            <span class="truncate">Frais &amp; Facturation</span>
                        </a>
                        <a onclick="troggle_panel('integrations_section')" class="integrations_section_btn link_section text-gray-900  hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#">
                            <svg class="svgs text-gray-400 integrations_section_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="truncate">Intégrations</span>
                        </a>
                        <a onclick="troggle_panel('Apparence_section')" class="Apparence_section_btn link_section text-gray-900  hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svgs text-gray-400 Apparence_section_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                            <span class="truncate">Apparence</span>
                        </a>

                        <a onclick="troggle_panel('Experiences_section')" class="Experiences_section_btn link_section text-gray-900  hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svgs text-gray-400 Experiences_section_svg  flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="truncate">Expériences</span>
                        </a>
                        @endcan
                    </nav>
                </aside>

                <div class=" sm:px-6 lg:px-0 lg:col-span-9">
                    <section class="profile_section single_panel">
                        <form action="{{route('pro.profile.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white py-6 px-4 sm:p-6">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900" id="payment_details_heading"> Mon profil
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-500">Mettez à jour vos informations de profil.</p>
                                    </div>
                                    <div class="mt-6 grid grid-cols-4 gap-6">
                                        <div class="col-span-4">
                                            <label class="block text-sm font-medium text-gray-700"> Photo </label>
                                            <div class="mt-1 flex items-center">
                                                <span class="inline-block bg-gray-100 rounded-full overflow-hidden h-12 w-12">
                                                    @if(auth()->user()->getFirstMediaUrl('avatar','avatar'))
                                                    <div class="h-full w-full bg-center bg-cover" style="background-image: url({{auth()->user()->getFirstMediaUrl('avatar','avatar')}})"></div>
                                                    @else
                                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                                    @endif
                                                    @if($errors->has('avatar'))
                                                    <p class="text-red-500 text-sm ">{{ $errors->first('avatar') }}</p>
                                                    @endif
                                                </span>
                                                <input type="file" accept="image/*" class="hidden" name="avatar" id="image">
                                                <button onclick="document.getElementById('image').click()" type="button" class="ml-5 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">modifié</button>
                                            </div>
                                        </div>
                                        <div class="col-span-4 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700" for="first_name">Prénom</label>
                                            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" id="first_name" type="text" name="first_name" autocomplete="cc-given-name" value="{{auth()->user()->getFirstname()}}">
                                            @if($errors->has('first_name'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('first_name') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-span-4 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700" for="last_name">Nom</label>
                                            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="text" name="last_name" autocomplete="last_name" value="{{auth()->user()->getLastname()}}">
                                            @if($errors->has('last_name'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('last_name') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-4 sm:col-span-2 ">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <div class="mt-1 relative rounded-md shadow-sm cursor-pointer">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <!-- Heroicon name: solid/mail -->
                                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
                                                </div>
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                                    <p onclick="email_changer_form()" class="text-sm font-bold text-orange-400" id="email_change">modifier</p>
                                                </div>
                                                <input type="email" disabled name="email" value="{{auth()->user()->getEmail()}}" id="email" class="focus:ring-orange-500 focus:border-orange-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="email@example.com">
                                            </div>
                                        </div>

                                        <div class="col-span-4 sm:col-span-2">
                                            <label class="block text-sm font-medium text-gray-700" for="tel">Numéro de téléphone</label>
                                            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="tel" id="tel" name="phone" value="{{auth()->user()->getPhone()}}">
                                            @if($errors->has('phone'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-span-4">
                                            <label class="block text-sm font-medium text-gray-700 " for="postal_code">Adresse</label>
                                            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="text" name="address" value="{{auth()->user()->getAddress()}}">
                                            @if($errors->has('address'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('address') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 ">
                                    <button type="submit" class="bg-orange-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-orange-400 focus:outline-none focus:ring-2
                                    focus:ring-offset-2 focus:ring-orange-900 " type="submit ">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </section>

                    <section class="Mot_de_passe_section hidden single_panel my-0">
                        <form action="{{route('pro.profile.updatepassword')}}" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white pb-6 px-4 sm:p-6">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900" id="payment_details_heading"> Mot de passe
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-500">Mettez à jour votre mot de passe.</p>
                                    </div>
                                    <div class="mt-6 grid grid-cols-4 gap-6">

                                        <div class="col-span-4">
                                            <label class="block text-sm font-medium text-gray-700" for="postal_code">Mot de passe actuel</label>
                                            <input name="old_password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="password">
                                        </div>
                                        @if($errors->has('old_password'))
                                        <p class="text-red-500 text-sm ">{{ $errors->first('old_password') }}</p>
                                        @endif
                                        <div class=" col-span-4 ">
                                            <label class="block text-sm font-medium text-gray-700 " for="postal_code ">Nouveau mot de passe</label>
                                            <input name="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm " id="postal_code
                                                                            " type="password">
                                            @if($errors->has('password'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-span-4">
                                            <label class="block text-sm font-medium text-gray-700" for="postal_code">Confirmer le nouveau mot de passe</label>
                                            <input name="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-600 focus:border-orange-400 sm:text-sm" type="password">
                                            @if($errors->has('password_confirmation'))
                                            <p class="text-red-500 text-sm ">{{ $errors->first('password_confirmation') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 ">
                                    <button type="submit" class="bg-orange-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-orange-400 focus:outline-none focus:ring-2
                                                                            focus:ring-offset-2 focus:ring-orange-900 " type="submit ">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </section>

                    @can('admin')
                    <section class="joures_ferie hidden single_panel my-0">
                      <holidays-component token="{{Auth::user()->getApitoken()}}" />
                    </section>
                  
                    <section class="frais_et_facturation hidden single_panel my-0">
                        <form action="#" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white pb-6 px-4 sm:p-6">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900" id="payment_details_heading">
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-500">Frais et FacturationParamètres</p>
                                    </div>

                                </div>
                                <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 ">
                                    <button disabled type="submit" class="bg-orange-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-orange-400 focus:outline-none focus:ring-2
                                                                            focus:ring-offset-2 focus:ring-orange-900 " type="submit ">Enregistrer</button>
                                </div>
                            </div>
                        </form>

                    </section>

                    <section class="integrations_section hidden single_panel my-0">
                        <form action="#" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white pb-6 px-4 sm:p-6">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900" id="payment_details_heading">integrations
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-500">integrations Paramètres</p>
                                    </div>

                                </div>
                                <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 ">
                                    <button disabled type="submit" class="bg-orange-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-orange-400 focus:outline-none focus:ring-2
                                                                            focus:ring-offset-2 focus:ring-orange-900 " type="submit ">Enregistrer</button>
                                </div>
                            </div>
                        </form>

                    </section>

                    <section class="Apparence_section hidden single_panel my-0">
                        <form action="#" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="bg-white pb-6 px-4 sm:p-6">
                                    <div>
                                        <h2 class="text-lg leading-6 font-medium text-gray-900" id="payment_details_heading">Apparence
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-500">Apparence Paramètres </p>
                                    </div>

                                </div>
                                <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6 ">
                                    <button disabled type="submit" class="bg-orange-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-orange-400 focus:outline-none focus:ring-2
                                                                            focus:ring-offset-2 focus:ring-orange-900 " type="submit ">Enregistrer</button>
                                </div>
                            </div>
                        </form>

                    </section>
 
                    <section class="Experiences_section hidden single_panel">
                        <experiances-component token="{{Auth::user()->getApitoken()}}"></experiances-component>
                    </section>
                    @endcan
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function troggle_panel(target) {

        document.querySelectorAll('.single_panel').forEach(panel => {
            panel.classList.add('hidden')
        })

        document.querySelector('.'.concat(target)).classList.remove('hidden')

        document.querySelectorAll('.link_section').forEach(link => {
            link.classList.remove('bg-gray-50')
            link.classList.remove('text-orange-600')
        })
        document.querySelector('.' + target.concat('_btn')).classList.remove('text-gray-900')
        document.querySelector('.' + target.concat('_btn')).classList.add('text-orange-600')
        document.querySelector('.' + target.concat('_btn')).classList.add('bg-gray-50')

        document.querySelectorAll('.svgs').forEach(svg => {
            svg.classList.remove('text-orange-600')
            svg.classList.add('text-gray-400')
        })
        document.querySelector('.' + target.concat('_svg')).classList.remove('text-gray-400')
        document.querySelector('.' + target.concat('_svg')).classList.add('text-orange-600')
    }


    function email_changer_form() {
        console.log('hello adil')
        document.querySelector('.form_email_update').classList.toggle('hidden')
    }
</script>
@endsection