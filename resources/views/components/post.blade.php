@props(['post' => $post])

<div>
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

            </div>

        </div>

    </div>
</div>
