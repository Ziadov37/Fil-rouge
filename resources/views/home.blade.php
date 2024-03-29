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
                <x-post :post="$post" />
            @endforeach
            <div class="grid justify-items-center">
                <div class="max-w-3/4 "> {{ $posts->links() }}</div>
            </div>
        @else
            <p>nop</p>
        @endif

    @endsection
    </div>

</body>


</html>
