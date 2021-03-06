@extends('layouts.admin')

@section('content')
    
<div class="container">
    <h2>店舗一覧</h2>
    <h3>  <a href=" {{route('home')}} ">サービス画面へ</a>  </h3>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>店名</th>
            <th>待ち人数</th>
            <th>紹介</th>
            <th>タイトル</th>
            <th>コンテンツ</th>
            <th>ファイル</th>
            <th>編集</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->store_name }}</td>
            <td>{{ $post->wait_people }}</td>
            <td>{{ $post->introduction }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->cover_image }}</td>
            <td><a class="btn btn-primary" href="{{route('admin.edit',['id'=> $post->id ]) }}" role="button">編集</td>
        </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('admin.create')}}" role="button">店登録</a>    

</div><!-- /#accordion -->

@endsection('content')