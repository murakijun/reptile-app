<x-app-layout>
    <x-slot name="head">
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </x-slot>
    <div class="container">
        <h1 class="blog-title">reptile SNS</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data" class="post-form">
            @csrf
            <div class="input-group">
                <label for="post-body">投稿内容</label>
                <textarea id="post-body" name="post[body]" placeholder="爬虫類は何してる？"></textarea>
            </div>
            <div class="input-group">
                <label for="post-image">写真</label>
                <input type="file" id="post-image" name="image">
            </div>
            <div class="input-group">
                <label for="tag-name">タグ</label>
                <input type="text" id="tag-name" name="tag[name]">
            </div>
            <input type="submit" value="投稿" class="submit-button">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </div>
</x-app-layout>