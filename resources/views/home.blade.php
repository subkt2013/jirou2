@extends('layouts.app')

@section('content')

<div class="container">
サイトの説明
    
    <p><a href="{{ route('posts.index') }}">Blog Posts</a></p>

    @if(session()->has('status'))
        <p style="color: green">
            {{ session()->get('status') }}
        </p>
    @endif
</div><!-- /#accordion -->

@endsection