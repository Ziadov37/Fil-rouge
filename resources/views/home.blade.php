{{-- @extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{ $post->user->name }}</a> <span
                            class="text-gray-600 text-sm">{{ $post->created_at }}</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>nop</p>
            @endif
        </div>

    </div>
@endsection --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Card</title>
    <link rel="stylesheet" href="styles.css" />
</head>
@extends('layouts.app')

@section('content')

    <body class="bg-gray-200 flex justify-center">

        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="p-10 grid justify-items-center">



                    <div class="w-9/12 px-32 pt-20 pb-20 bg-white">
                        {{-- <div class="p-10"> --}}

                        <div class="flex justify-end">
                            <button class="px-8 py-4 text-2xl text-white bg-blue-500 border-0">
                                Follow
                            </button>
                        </div>
                        <div class="flex">
                            <div class="w-64 h-64 mr-10 bg-green-500">
                                <img class="h-64 rounded-full"
                                    src="{{ $post->profile_image }}" />
                            </div>
                            <div class="flex flex-col">
                                <span class="mb-6 text-5xl"><a href="">{{ $post->user->name }}</a></span>
                                <span class="text-gray-600 text-sm">{{ $post->created_at }}</span>
                                <span class="mb-6 text-2xl">
                                    {{ $post->body }}
                                </span>
                                <span class="mb-6 text-2xl">
                                    103 Following 445 Followers
                                </span>
                                <span class="text-2xl text-blue-500">
                                    3 projects
                                </span>
                            </div>
                        </div>

                    </div>

                </div>

            @endforeach
            <div class="pagination" style="    margin: -48px 252px; padding: 41px;"> {{ $posts->links() }}</div>
        @else
            <p>nop</p>
        @endif

    @endsection
    </div>

</body>


</html>
