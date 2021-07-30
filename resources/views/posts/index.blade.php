@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post" enctype="multipart/form-data" class="mb-4">
                @csrf
                <div>
                    <label for="name">Name : </label>
                    <input type="text" name="name" class="bg-gray-100 border-2 p-2 my-2 rounded-lg">
                </div>
                <div>
                    <label for="category">Category :</label>
                    <select name="category" id="category" class="bg-gray-100 border-2 p-2 my-2 rounded-lg">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="body" class="mb-2">Description :</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-gray-100 border-2 w-full p-2 my-2 rounded-lg @error('body') border-red-500 @enderror"
                        placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="text-red-500 my-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="">Images</label>
                    <input type="file" name="profile_image" class="form-control m-2" enctype="multipart/form-data">
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                </div>
            </form>


        </div>
    @endsection
