@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="/storage/img/{{ $post->cover_image}}" class="card-img-top" alt="画像">
        <div class="card-body">
            <h5 class="card-title">{{$post->store_name}}</h5>
            <p class="card-text">
            {!! nl2br(e($post->introduction)) !!}<br>
            行列: {{$post->wait_people}} 人待ち <br>
            更新日時: {{$post->updated_at}} <br>
            </p>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">現在の待ち人数を入力する</a>
        </div>
    </div>
</div>
@endsection('content')