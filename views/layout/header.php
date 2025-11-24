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
<body class="bg-gray-800">
<!-- NAVBAR -->
<header class="navbar w-full h-16 flex justify-between items-center px-5p  
text-amber-100 font-medium 
fixed top-0 left-0 right-0 z-50 transition-all">
    <div class="flex items-center gap-2 cursor-pointer">
        <img src="<?php echo $icon; ?>" alt="Logo" class="w-10 rounded-full">
        <h1 class=" text-2xl hidden md:block">Santa Fe</h1>
    </div>
    <nav class="flex justify-between items-center transition-all">
        <ul id="navbar" class="flex items-center justify-between gap-8 not-md:flex-col 
        not-md:absolute not-md:top-16 not-md:left-0 not-md:w-full 
        not-md:bg-gray-700 not-md:py-4 not-md:hidden z-50">
            <li id="locate1"><a href="index.php?Controller=Home&action=Index" class="hover:text-amber-300 navbar-link">Inicio</a></li>
            <li id="locate2"><a href="index.php?Controller=Ubicacion&action=Index" class="hover:text-amber-300">Ubicación</a></li>
            <li id="locate3"><a href="index.php?Controller=Contacto&action=Index" class="hover:text-amber-300">Contacto</a></li>
            <li id="locate4"><a href="index.php?Controller=Menu&action=Index" class="hover:text-amber-300">Menu</a></li>
            <li id="locate5"><a href="index.php?Controller=Reservar&action=Index" class="hover:text-amber-300">Reservar</a></li>
            <?php
            // login  pero  la versión responsive
            $guestNames = ['invitado', 'guest', 'anonimo', 'anónimo', 'anonymous'];

            $rawName = null;
            if (is_array($user) && isset($user['name'])) {
                $rawName = $user['name'];
            } elseif (is_object($user) && isset($user->name)) {
                $rawName = $user->name;
            } elseif (is_string($user)) {
                $rawName = $user;
            }

            $isGuestName = false;
            if (is_string($rawName)) {
                $normalized = mb_strtolower(trim($rawName), 'UTF-8');
                if ($normalized === '' || in_array($normalized, $guestNames, true)) {
                    $isGuestName = true;
                }
            }

            $showLogin = empty($user) || $isGuestName;

            if ($showLogin) : ?>
                <!-- USER RESPONSIVE: mostrar botón de login -->
                <button id="user-responsive" class="text-gray-950 bg-amber-100 px-2 py-1 rounded-md cursor-pointer flex md:hidden" onclick="window.location.href='index.php?controller=Auth&action=LoginForm'">Iniciar Sesion</button>
                <div id="card-user-responsive" class="absolute left-1/2 -translate-x-1/2 -bottom-3/10 rounded-md w-60 h-auto py-8 px-2 bg-gray-400 z-999 hidden text-center md:hidden">
                </div>
            <?php else :
                // obtener y sanear nombre de usuario
                if (is_array($user) && isset($user['name'])) {
                    $username = $user['name'];
                } elseif (is_object($user) && isset($user->name)) {
                    $username = $user->name;
                } else {
                    $username = (string)$user;
                }
                $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
            ?>
                <!-- USER RESPONSIVE: mostrar nombre y card -->
                <button id="user-responsive" class="text-gray-950 bg-amber-100 px-3 py-2 rounded-md cursor-pointer flex md:hidden" onclick="window.location.href='index.php?controller=Auth&action=LoginForm'">
                    <?php echo $username; ?>
                </button>
                <div id="card-user-responsive" class="absolute left-1/2 -translate-x-1/2 -bottom-3/10 rounded-md w-60 h-auto py-8 px-2 bg-gray-400 z-999 hidden text-center md:hidden">
                    <a href="#" class="w-auto h-auto py-2 px-4 bg-blue-950 text-white rounded-md"><?php echo $username; ?></a>
                </div>
            <?php endif; ?>
        </ul>
    </nav>
    <!-- BUTTONS -->
    <div class="content-buttons flex gap-4">
        <?php
        // Mostrar "Iniciar Sesión" si no hay sesión real o si el usuario es un "invitado" genérico
        $guestNames = ['invitado', 'guest', 'anonimo', 'anónimo', 'anonymous'];

        $rawName = null;
        if (is_array($user) && isset($user['name'])) {
            $rawName = $user['name'];
        } elseif (is_object($user) && isset($user->name)) {
            $rawName = $user->name;
        } elseif (is_string($user)) {
            $rawName = $user;
        }

        // Normalizar y comprobar si el nombre indica "invitado"
        $isGuestName = false;
        if (is_string($rawName)) {
            $normalized = mb_strtolower(trim($rawName), 'UTF-8');
            if ($normalized === '' || in_array($normalized, $guestNames, true)) {
                $isGuestName = true;
            }
        }

        // Decidir si mostrar el botón de login
        $showLogin = empty($user) || $isGuestName;

        if ($showLogin) : ?>
            <button id="login" class="text-gray-950 bg-amber-100 px-3 py-2 rounded-md cursor-pointer hidden md:flex" onclick="window.location.href='index.php?controller=Auth&action=LoginForm'">
                Iniciar Sesion
            </button>
        <?php else :
            // determinar y sanear el nombre de usuario de forma segura
            $username = '';
            if (is_array($user) && isset($user['name'])) {
                $username = $user['name'];
            } elseif (is_object($user) && isset($user->name)) {
                $username = $user->name;
            } else {
                $username = (string)$user;
            }
            $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        ?>
            <button id="user" class="text-gray-950 bg-amber-100 px-3 py-2 rounded-md cursor-pointer hidden md:flex">
                <?php echo $username; ?>
            </button>
            <div id="card-user" class="absolute right-5 top-[11vh] rounded-md w-60 h-auto py-8 px-2 
            bg-gray-400 z-999 hidden text-center">
                <h1 class=" w-auto h-auto  text-white rounded-md">
                    <?php echo $username; ?>
                </h1>
            </div>
            
        <?php endif; ?>
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
<script src="public\js\locate.js"></script>