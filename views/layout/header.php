<!DOCTYPE html>
<html lang="es" class=" scroll-smooth">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo $icon; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/src/output.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <title><?php echo $title; ?></title>
    

</head>
<body class="bg-gray-900">
<!-- NAVBAR -->
<header class="navbar w-full h-10vh flex justify-between items-center px-5p  
text-amber-100 font-medium 
fixed top-0 left-0 right-0 z-50 transition-all">
    <div class="flex items-center gap-2 cursor-pointer">
        <img src="<?php echo $icon; ?>" alt="Logo" class="w-12 rounded-full">
        <h1 class=" text-2xl hidden md:block">Santa Fe</h1>
    </div>
    <nav class="flex justify-between items-center transition-all">
        <ul id="navbar" class="flex items-center justify-between gap-8 not-md:flex-col 
        not-md:absolute not-md:top-[10vh] not-md:left-0 not-md:w-full 
        not-md:bg-gray-700 not-md:py-4 not-md:hidden z-50">
            <li><a href="#" class="hover:text-amber-300 navbar-link">Inicio</a></li>
            <li><a href="#" class="hover:text-amber-300">Ubicación</a></li>
            <li><a href="#" class="hover:text-amber-300">Contacto</a></li>
            <li><a href="#" class="hover:text-amber-300">Menu</a></li>
            <li><a href="#" class="hover:text-amber-300">Reservar</a></li>
            <!-- USER RESPONSIVE -->
            <button id="user-responsive" class="text-gray-950 bg-amber-100 px-3 py-2 rounded-md cursor-pointer flex md:hidden">Login</button>
        <div id="card-user-responsive" class="absolute left-1/2 -translate-x-1/2 -bottom-3/10 rounded-md w-60 h-auto py-8 px-2 
        bg-gray-400 z-999 hidden text-center md:hidden">
            <a href="#" class=" w-auto h-auto py-2 px-4 bg-blue-950 text-white rounded-md">Iniciar Sesion</a>
        </div>
        </ul>
    </nav>
    <!-- BUTTONS -->
    <div class="content-buttons flex gap-4">
        <button id="user" class="text-gray-950 bg-amber-100 px-3 py-2 rounded-md cursor-pointer hidden md:flex">Login</button>
        <div id="card-user" class="absolute right-5 top-[11vh] rounded-md w-60 h-auto py-8 px-2 
        bg-gray-400 z-999 hidden text-center">
            <a href="#" class=" w-auto h-auto py-2 px-4 bg-blue-950 text-white rounded-md">Iniciar Sesion</a>
        </div>
        <button id="bars" class="md:hidden w-auto cursor-pointer">
            <svg width="28px" height="28px">
                <use xlink:href="./public/svg/sprite.svg#bars" />
            </svg>
        </button>
    </div>
</header>
<!-- SCRIPTS -->
<script src="public\js\navbar.js"></script>
<script src="public\js\user.js"></script>
<script src="public\js\bars.js"></script>