<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Try</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <div class="container mx-auto px-2">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded"><a
                            href="{{ route('home') }}">Home</a></button>
                </li>


            </ul>
            <ul class="flex items-center">

                @auth
                    <li>
                        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded"><a
                                href="{{ route('posts') }}">Post
                                U're service </a></button>
                    </li>
                    <li class="p-2">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded "><a
                                href="{{ route('dashboard') }}"> {{ auth()->user()->name }} Profile</a></button>
                    </li>
                    {{-- <li>
                    <a href="" class="p-3"></a>
                </li> --}}
                    <li>
                        <form action="{{ route('logout') }}" method="post" class=" inline">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded">Logout </button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register </a>
                    </li>
                @endguest

            </ul>

        </nav>
        @yield('content')
    </div>
</body>

</html>
