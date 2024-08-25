<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YOUT</title>

        <!-- Fonts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
        <link rel="shortcut icon" href="/img/icono.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Orbit&display=swap" rel="stylesheet"> --}}
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="welcome">

    {{-- SECCION NAVBAR --}}
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                    <img src="/img/logo/logo_BackG.png" width="50" alt="Logo">
            </a>
        
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-principal"
                     aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
                     <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="menu-principal">
                        <ul class="navbar-nav ms-auto">
                            <a class="nav-link" href="#anun">Inicio</a>
                            <a class="nav-link" href="#nos">Sobre nosotros</a>
                            <a class="nav-link" href="#serv">Servicios</a>
                            {{-- <a class="nav-link" href="#team">El Equipo</a> --}}
                            @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a href="{{ url('/home') }}" class="btn btn-outline-light">Inicio</a></li>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-outline-light my-2 my-md-0 mx-md-2">Iniciar Sesión</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-outline-light">Registrarse</a></li>
                        @endif
                    @endauth
                    @endif
                 </div>
                </ul>
            </div>
        </div>
    </nav>

    {{-- SECCION ANUNCIOS --}}
    <div class="container-fluid py-3 mt-3" id="anuncios">
    <div class="anuncios" id="anun">
            <div class="row d-flex flex-column align-items-stretch">
                <div class="col-9 offset-1 col-md-5 offset-md-2 text-start py-5">
                    <div class="p-4 mt-1 shadow rouded" id="yout">
                    <h1 class="display-4 text-primary">YOUT</h1>
                    <h1 class="display-5 text-white">¡Comienza tu emprendimiento!</h1>
                    <p class="h5 text-white">Sube tus artículos y entrega dentro de las instalaciones. ¡Emprender nunca fue tan fácil! </p>
                </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECCION SOBRE NOSOTROS --}}
    <div class="container-fluid" id="nosotros">
            <div class="nosotros text-center bg-lightx" id="nos">
                <div class="row d-flex py-5">
                    <div class="col-9 col-md-5 mx-auto my-auto">
                        <img src="/img/mesa.png" class="img-fluid mx-auto" alt="Mesa">
                    </div>
                    <div class="col-9 col-md-5 my-auto shadow rounded p-5 my-3 us mx-auto">
                        <p class="display-4 fw-bold  mb-3">Sobre Nosotros</p>
                        <p class="h3 fw-bold  mb-3">¡Bienvenido a YOUT y comparte con nosotros!</p>
                        <p class="h5" style="text-align: justify">
                            YOUT es una empresa enfocada en facilitar la compra-venta entre usuarios, con el propósito de simplificar el proceso de ventas dentro del entorno universitario. Nuestro principal compromiso radica en respetar y promover en su totalidad los valores que caracterizan a nuestra comunidad tan esperada
                        </p>
                    </div>
                </div>
            </div>
    </div>
        
    {{-- SECCION SERVICIOS --}}
    <div id="serv">‎ </div>
    <div class="container-fluid servicios py-5">
        <div class="container text-center" >
            <div class="display-1 text-white" id="serv2">Servicios</div>
            <div class="row justify-content-around">

                <div class="col-8 col-md-4 my-2">
                    <a href="{{ route('login') }}">
                        <div class="card tarjeta mx-auto ms-md-auto">
                            <img src="/img/icono1.png" alt="P1" class="card-img-top mx-auto pt-4">
                            <div class="car-body p-3">
                                <p class="card-title h3">Comunidad</p>
                                <p class="card-text">Solicita ayuda a la comunidad, conoce personas y haz tus propuestas.</p> 
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-8 col-md-4 my-2">
                    <a href="{{ route('login') }}">
                    <div class="card tarjeta mx-auto">
                        <img src="/img/icono2.png" alt="P2" class="card-img-top mx-auto pt-4">
                        <div class="car-body p-3">
                            <p class="card-title h3">Venta y compra</p>
                            <p class="card-text">Encuentra lo que buscas y emprende al alcance de tu mano.</p>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-8 col-md-4 my-2">
                    <a href="{{ route('login') }}">
                    <div class="card tarjeta mx-auto me-md-auto">
                        <img src="/img/icono3.png" alt="P3" class="card-img-top mx-auto pt-4">
                        <div class="car-body p-3">
                            <p class="card-title h3">Experiencia</p>
                            <p class="card-text">Fácil y rápido de usar.<p>
                        </div>
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- SECCION SOBRE EL EQUIPO --}}
    {{-- <div class="container-fluid equipo bg-lightx" id="team">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-11 mx-auto">
                <p class="display-3 fw-bold my-3">Equipo de Trabajo</p>
                    <div class="equipo">
                        <img src="/img/s-1.png" class="img-fluid foto mx-auto rounded shadow my-4" alt="">
                        <p class="fw-bold fs-1">Solórzano Juárez Brayan Arturo</p>
                        <p class="h5">
                            Líder encargado de la creación de la plataforma, organizador en equipo y desarrollador Back-End con amplia experiencia en programación.
                        </p>
                        <p class="h5 text-decoration-none fw-bold">
                            <a href="mailto:brayan@yout.cloud">brayan@yout.cloud</a>
                        </p>
                    </div>

                    <div class="equipo">
                        <img src="/img/s-2.png" class="img-fluid foto mx-auto rounded shadow my-4" alt="">
                        <p class="fw-bold fs-1">De La Hoya Angeles Abraham Alejandro</p>
                        <p class="h5">
                            Encargado del desarrollo web del lado del servidor, Desarrollador Full-Stack e implementación de Frameworks.
                        </p>
                        <p class="h5 text-decoration-none fw-bold">
                            <a href="mailto:abraham@yout.cloud">abraham@yout.cloud</a>
                        </p>
                    </div>

                    <div class="equipo">
                        <img src="/img/s-3.png" class="img-fluid foto mx-auto rounded shadow my-4" alt="">
                        <p class="fw-bold fs-1">Inzunza Pereyra Lizbeth Joseline</p>
                        <p class="h5">
                            Encargada del desarrollo web del lado del cliente, diseño e implementación de metodologías para la organización del sitio, y Desarrolladora Front-End.
                        </p>
                        <p class="h5 text-decoration-none fw-bold">
                            <a href="mailto:lizbeth@yout.cloud">lizbeth@yout.cloud</a>
                        </p>
                    </div>

                    <div class="equipo">
                        <img src="/img/s-4.png" class="img-fluid foto mx-auto rounded shadow my-4" alt="">
                        <p class="fw-bold fs-1">Sánchez Esquivel Israel Alberto</p>
                        <p class="h5">
                            Encargado de aportar ideas creativas, manejo de redes e implementación de apoyo tanto en el ámbito del lado del servidor como del cliente.
                        </p>
                        <p class="h5 text-decoration-none fw-bold">
                            <a href="mailto:israel@yout.cloud">israel@yout.cloud</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>      
    </div> --}}

    {{-- SECCION FOOTER --}}
        <footer class="pie-pagina text-center bg-dark text-white py-3">
        <div class="container">
            <p class="m-0">YOUT | Copyright @ {{ date('Y') }}</p>
        </div>
        </footer>        

                </div>
            </div>
        </div>
    </body>
</html>
