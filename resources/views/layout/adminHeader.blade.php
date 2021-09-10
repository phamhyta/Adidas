<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/4ff8e07996.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="flex justify-between">
            <div>
                <div class="dropdown inline-block relative">
                    <button class="text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                        <div>
                            <div class="relative inline-block">
                                <img class="inline-block object-cover w-12 h-12 rounded-full" src="img/avatar.jpeg" alt="Profile image"/>
                                <span class="absolute bottom-0 right-0 inline-block w-3 h-3 bg-green-600 border-2 border-white rounded-full"></span>
                            </div>
                        </div>
                        <div class="pl-2">Lê Minh Tiến</div>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                    </button>
                  <ul class="dropdown-menu absolute hidden text-gray-700 z-10">
                    <li class="">
                        <a class="rounded-t bg-gray-300 hover:bg-gray-400 py-2 px-5 block whitespace-no-wrap" href="#">
                            Edit
                            <i class="fas fa-user-edit"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="bg-gray-300 hover:bg-gray-400 py-2 px-5 block whitespace-no-wrap" href="#">
                            Change Password
                            <i class="fas fa-key"></i>
                        </a>
                    </li>
                    <li class="">
                        <a class="rounded-b bg-gray-300 hover:bg-gray-400 py-2 px-5 block whitespace-no-wrap" href="#">
                            Log out
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </nav>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <div>
        @yield('adminContent')
    </div>
</body>
</html>