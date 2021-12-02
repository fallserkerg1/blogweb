<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
        <div class="text-lg text-gray-500 mb-2" style="margin-bottom: 0.5rem;">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            {{-- Contenido principal --}}
            <div class="col-span-2">
                <figure>
                    @if($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/02/25/00/17/kitten-4018756_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>
            {{-- Contenido relacionado --}}
            <aside class="col-span-1">
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{ $post->category->name }}</h1>
                <ul>
                    @foreach($similar as $key)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $key) }}">
                                @if($key->image)
                                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($key->image->url) }}" alt="">
                                @else
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2019/02/25/00/17/kitten-4018756_960_720.jpg" alt="">
                                @endif
                                <span class="ml-2 text-gray-600">{{ $key->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
