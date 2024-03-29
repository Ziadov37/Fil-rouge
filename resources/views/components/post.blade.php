@props(['post' => $post])

{{-- <div> --}}
{{-- <div class="p-10 grid justify-items-center"> --}}



{{-- <div class="w-9/12 px-32 pt-20 pb-20 bg-white"> --}}
{{-- <div class="p-10"> --}}

{{-- <div class="flex justify-end">
                <button class="px-8 py-4 text-2xl text-white bg-blue-500 border-0">
                    Follow
                </button>
            </div>
            <div class="flex">
                <div class="w-64 h-64 mr-10 bg-green-500">
                    <img class="h-64 rounded-full" src="{{ asset('/storage/' . $post->profile_image) }}" />
                </div>
                <div class="flex flex-col">
                    <span class="mb-6 text-5xl"><a
                            href="{{ route('users.posts', $post->user) }}">{{ $post->user->name }}</a></span> <span
                        class="text-gray-600 text-sm">{{ $post->created_at }}</span>
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
            <div class="flex items-center">
                @auth

                    @if (!$post->likedBy(auth()->user()))
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form>
                    @else
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Unlike</button>
                        </form>
                    @endif
                @endauth
                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>

            </div> --}}

{{-- </div>

    </div>
</div> --}}
<div class="p-4 grid justify-items-center">
    <div
        class="bg-white p-2 w-80 max-w-6xl sm:w-full sm:p-4 h-auto sm:h-64 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 select-none">
        <div class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover">
            <img class="h-52 sm:h-full sm:w-72 rounded-xl bg-gray-100 bg-center bg-cover"
                src="{{ asset('/storage/' . $post->profile_image) }}" />
        </div>
        <div class="flex sm:flex-1 flex-col gap-2 p-1">
            <h1 class="text-lg sm:text-xl font-semibold  text-gray-600">
                {{ $post->name }}
            </h1>
            <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                {{ $post->body }}
            </p>
            <div class="flex gap-4 mt-auto">
                @auth
                    @if (!$post->likedBy(auth()->user()))
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            <button type="submit"
                                class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                    </path>
                                </svg>

                                <span>{{ $post->likes->count() }}
                                    {{ Str::plural('like', $post->likes->count()) }}</span>
                            </button>
                        </form>
                    @else
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class='flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M923 283.6a260.04 260.04 0 0 0-56.9-82.8 264.4 264.4 0 0 0-84-55.5A265.34 265.34 0 0 0 679.7 125c-49.3 0-97.4 13.5-139.2 39-10 6.1-19.5 12.8-28.5 20.1-9-7.3-18.5-14-28.5-20.1-41.8-25.5-89.9-39-139.2-39-35.5 0-69.9 6.8-102.4 20.3-31.4 13-59.7 31.7-84 55.5a258.44 258.44 0 0 0-56.9 82.8c-13.9 32.3-21 66.6-21 101.9 0 33.3 6.8 68 20.3 103.3 11.3 29.5 27.5 60.1 48.2 91 32.8 48.9 77.9 99.9 133.9 151.6 92.8 85.7 184.7 144.9 188.6 147.3l23.7 15.2c10.5 6.7 24 6.7 34.5 0l23.7-15.2c3.9-2.5 95.7-61.6 188.6-147.3 56-51.7 101.1-102.7 133.9-151.6 20.7-30.9 37-61.5 48.2-91 13.5-35.3 20.3-70 20.3-103.3.1-35.3-7-69.6-20.9-101.9zM512 814.8S156 586.7 156 385.5C156 283.6 240.3 201 344.3 201c73.1 0 136.5 40.8 167.7 100.4C543.2 241.8 606.6 201 679.7 201c104 0 188.3 82.6 188.3 184.5 0 201.2-356 429.3-356 429.3z">
                                    </path>
                                </svg>
                                <span>{{ $post->likes->count() }}
                                    {{ Str::plural('like', $post->likes->count()) }}</span>
                            </button>
                        </form>
                    @endif
                @endauth
                <button
                    class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'><a
                        href="{{ route('users.posts', $post->user) }}">
                        <span>Show {{ $post->user->name }} Profile</span>
                    </a></button>
            </div>
            {{-- <div class="flex items-center">
                @auth

                    @if (!$post->likedBy(auth()->user()))
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form>
                    @else
                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Unlike</button>
                        </form>
                    @endif
                @endauth
                <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>

            </div> --}}
        </div>
    </div>
</div>
