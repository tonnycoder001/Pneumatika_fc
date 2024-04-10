@extends('layouts.index')

@section('content')

<div class=" pb-6">
<section class="container w-full mx-auto  rounded-lg bg-white shadow-md ">
    <div class="px-12 mx-auto max-w-7xl pt-12">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-8 text-4xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl  md:tracking-tight animate-bounce ">
                <span>Welcome</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">to pneumatika</span> <span>fun engagement Page</span>
            </h1>
		</div>
	</div>
    <div>
        <p class="flex justify-center pt-2">
            Let us hear what you have to say about Pneumatika
        </p>
    </div>
    <div class="pb-2">
        <p class="flex justify-center item-centre">
            You are our loyal fan. Let us hear what you have to say.
            <p class="flex justify-center item-centre"> Help us improve Pneumatika
                and make it a better place. Not only for us, but also for the coming generations.</p>
        </p>
    </div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg md:p-4 sm:p-2">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg
@error('body') border-red-500 @enderror"
                        placeholder="Post something!"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded
                font-medium">Post</button>
                </div>
            </form>
            {{-- adding posts to the body when posted --}}
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-4">
                        {{-- adding name to the post according to the owner of the post --}}
                        <a href="" class="font-bold">{{ $post->user->name }}</a>
                        {{-- adding time to your post --}}
                        <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        {{-- postng a post on the post page --}}
                        <p class="mb-2 text-base sm:text-sm"> {{ $post->body }}
                        </p>
                    </div>
                    <div>
                        <div class="flex item-center">
                            {{-- the if else conditions helps if a post is already liked. The like button dissapears and only the unlike butt
                                is visible --}}
                                @auth
                            @if(!$post->likedBy(auth()->user()))
                            <form action="{{route('post.like', $post)}}" method="post" class="mr-1">
                                @csrf
                                <button type="submit" class="text-blue-500">Like</button>
                            </form>
                            @else
                            {{-- deleting the like --}}
                            <form action="{{route('post.like', $post)}}" method="post" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-blue-500">Unlike</button>
                            </form>
                            @endif
                            @endauth
                            {{-- outputs home many likes a post has --}}
                            <span>{{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}</span>
                        </div>
                    </div>
                @endforeach
                {{-- showing only 20 posts on the post page --}}
                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif

        </div>
    </div>
</section>
</div>
@endsection
