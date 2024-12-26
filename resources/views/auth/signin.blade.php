<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- flowbite -->
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    </head>
<body class="">
  <div class="flex h-screen">
    <!-- Left side with the image -->
    <div class="hidden md:flex md:w-1/2 md:h-full">
        <img src="{{asset('img/signIn.png')}}" alt="Building Image" class="object-cover w-full h-full">
    </div>
    
    <!-- Right side with the form -->
    <div class="md:flex md:flex-col justify-center items-center w-full md:p-5 my-auto md:w-1/2 bg-white mx-auto">
        <div class="max-w-md w-full">
            <h2 class="text-3xl font-bold mb-4">Selamat Datang!</h2>
            <p class="text-gray-600 mb-6">Welcome Back!</p>
            
            <!-- Form -->
            <form action="{{route('signin')}}" method="POST">
            @csrf
                <div class="mb-4">
                    <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-gray-700"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                </div>
                <div class="mb-4">
                    <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-gray-700"/>
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                </div>
                <div>
                    <button type="submit" class="btn w-full bg-primary text-white text-lg hover:bg-primary hover:opacity- p-2 rounded transition">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>