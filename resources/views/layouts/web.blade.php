<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bitmedia</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <!-- PLUGIN ACTIVMAP -->
    <!-- Google Maps API V3 -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&language=en&key=AIzaSyBhZn-Oqs8-O9UXgvOakmWrq7jiJkHceKE"></script>
    <!--    
    As per Google recent announcement, usage of the Google Maps APIs now requires a key.
    If you are using the Google Maps API on localhost or your domain was not active prior to June 22nd, 2016, it will require a key going forward.
    Add your own Google Maps API key.
    Here is the link to get your key: https://console.developers.google.com/flows/enableapi?apiid=maps_backend&keyType=CLIENT_SIDE&reusekey=true    
    Replace the script above with: <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=YOUR_OWN_API_KEY"></script>
    -->
    <!-- JQuery -->
    <script src="{{ asset('jquery-activmap/js/jquery-1.10.2.min.js')}}"></script>
    <!-- Activ'Map plugin -->
    <link rel="stylesheet" href="{{ asset('jquery-activmap/css/skin-classic/activmap-classic.css')}}">
    <script src="{{ asset('jquery-activmap/js/jquery-activmap.min.js')}}"></script>
    <script src="{{ asset('jquery-activmap/js/markercluster.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="font-sans antialiased">
    <header class="shadow-lg flex bg-red-700">
        @auth
            @livewire('navigation-menu')
        @else
            <a href="{{ url('login') }}" class="text-sm text-white bg-green-700 hover:bg-green-300 hover:text-black rounded py-1 px-2 ml-4 my-2">
                <h1>Login</h1>
            </a>
            <a href="{{ url('register') }}" class="text-sm text-white bg-gray-700 hover:bg-gray-300 hover:text-black rounded py-1 px-2 mx-2 my-2">
                <h1>Registro</h1>
            </a>
        @endif        
    </header>
    
    <main id="app" class="py-10 min-h-screen bg-gray-100">
        <div class="container sm:px-4 mx-auto px-4">
            @yield('content')
        </div>
    </main>

    @stack('modals')

    @livewireScripts

    <footer class="absolute w-full py-4 bottom-auto bg-red-900 text-white">
        <div class="md:flex md:flex-row-reverse justify-around">
            <div class="ml-8 mt-4">
                <div class="hover:text-blue-700"><i class="fa fa-facebook"></i> bitmedia</div>
                <div class="hover:text-blue-500"><i class="fa fa-twitter"></i> @bitmedia</div>
                <div class="hover:text-red-500"><i class="fa fa-instagram"></i> @bitmedia</div>
            </div>
            <ul class="ml-8 mt-4 mb-4">
                <li>BITMEDIA S.R.L.</li>
                <li>Casa Matriz : Calle 16 Nro. 220</li> 
                <li>Edificio Centro de Negocios, piso 5 Depto. 502</li>
                <li>Zona / Barrio : Obrajes</li>
                <li>Telefono : 65590211</li>
                <li>La Paz - Bolivia</li>
            </ul>
        </div>
    </footer>    
</body>
</html>