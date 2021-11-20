@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden" style="margin-bottom: 2rem">
    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {{ $post->extract }}
        </div>
    </div>
    <div style="padding: 1.5rem; margin-right: 0.5rem;">
        @foreach($post->tags as $tag)
            <a class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700" href="{{ route('posts.tag', $tag) }}">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>
