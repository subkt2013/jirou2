@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="画像">
        <div class="card-body">
            <h5 class="card-title">店名: {{$post->store_name}}</h5>
            <p class="card-text">
            説明: Some quick example text to build on the card title and make up the bulk of the card's content. <br>
            行列: {{$post->wait_people}} 人待ち <br>
            更新日時: {{$post->updated_at}} <br>
            </p>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">現在の待ち人数を入力する</a>
        </div>
    </div>
</div>
@endsection('content')