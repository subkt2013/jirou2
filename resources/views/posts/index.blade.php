@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <h2>東京</h2>
        <ul class="list-group">
            <li class="list-group-item">
                @forelse ($posts as $post)
                    <p>
                        <h3>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                        </h3>
                    </p>
                @empty
                    <p>No blog posts yet!</p>
                @endforelse
            </li>
        </ul>
    </div>
</div><!-- /#accordion -->

@endsection('content')