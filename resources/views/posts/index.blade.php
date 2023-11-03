<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('reptile SNS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="posts">
                        @foreach ($posts as $post)
                            <div class="post">
                                <p class="body">{{ $post->body }}</p>
                                <a href="/posts/{{ $post->id }}">{{ $post->post }}</a>
                                @if ($post->image)
                                    <div>
                                        <img src="{{ $post->image }}" alt="画像が読み込めません。"/>
                                    </div>
                                @endif
                                <p class="tag">{{ $post->tag }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="paginate">
                        {{ $posts->links() }}
                    </div>
                    <a href="/posts/create">create</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>