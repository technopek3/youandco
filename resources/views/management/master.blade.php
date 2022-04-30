<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
    @yield('head')
</head>

<body class="font-sans antialiased text-gray-900">
    <div id="app" class="">
        <div class="h-screen flex overflow-hidden bg-gray-100">
            <!-- start :: mobile nav -->
            @include('management.components.mobile_navigation')
            <!-- End :: mobile nav -->

            <!-- start :: desktop nav -->
            @include('management.components.desktop_navigation')
            <!-- start :: desktop nav -->

            <div class="flex flex-col w-0 flex-1 overflow-hidden relative">
                 <!-- start :: ttop_bar -->
                @include('management.components.top_bar')
                <!-- start :: top_bar -->
                <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
                    <div class="pt-2 pb-6 md:py-6" >
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        function menu_troggle(){
            document.querySelector('.mobile-menu').classList.toggle('hidden')
            document.querySelector('.mobile-menu').classList.toggle('block')
        }
       
        document.querySelectorAll('#user-menu').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.menu').classList.toggle('hidden')
            })
        })
        function profile_troggle(){
            document.querySelector('.profile-menu').classList.toggle('hidden')
        }
    </script>
    <script src="{{asset('js/app.js')}}" defer></script>
    @yield('scripts')
</body>

</html>