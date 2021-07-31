@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
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
    @endforeach


@endsection
