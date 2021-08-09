@extends('layouts.app')

@section('content')
    {{-- <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{ auth()->user()->name }}
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                {{ $post->name }}
            </div>
        </div>
    @endforeach --}}

    <div>
        <div class="md:flex shadow-lg  mx-6 md:mx-auto mt-5 max-w-lg md:max-w-2xl h-64">
            @foreach ($posts as $post)
                <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6"
                    src="{{ asset('/storage/' . $post->profile_image) }}" alt="bag">
                <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                    <div class="flex items-center">
                        <h2 class="text-xl text-gray-800 font-medium mr-auto">{{ $post->name }}</h2>
                        {{-- <p class="text-gray-800 font-semibold tracking-tighter">
                            only
                            <i class="text-gray-600 line-through">60$</i>
                            48$
                        </p> --}}
                    </div>
                    <p class="text-sm text-gray-700 mt-4">
                        {{ $post->body }}
                    </p>
                    <div class="flex items-center justify-end mt-4 top-auto">
                        <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
                        <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
                        <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md "> <a
                                href=" delete/{{ $post->id }}">
                                Publish</a></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
