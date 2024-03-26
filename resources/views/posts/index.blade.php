@extends('layouts.index')

@section('content')
    <div class="flex justify-center items-center pt-6 pb-6">
        <h1 class="text-6xl font-bold md:text-5xl sm:text-4xl"> Welcome to
            <span class="text-green-500">Pneu</span><span class="text-orange-500">matika</span> Post Page
        </h1>
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
                <div class="mb-3">
                    <label for="image" class="form-label">Image (optional)</label>
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">
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
                @endforeach
                {{-- showing only 2 posts on the post page --}}
                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif

        </div>
    </div>
@endsection
