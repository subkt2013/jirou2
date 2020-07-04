@extends('layouts.admin')

@section('content')
    
<div class="container">
    <h2>店舗一覧</h2>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>店名</th>
            <th>待ち人数</th>
            <th>紹介</th>
            <th>タイトル</th>
            <th>コンテンツ</th>
            <th>ファイル</th>
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
        </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('admin.create')}}" role="button">店登録</a>    

</div><!-- /#accordion -->

@endsection('content')