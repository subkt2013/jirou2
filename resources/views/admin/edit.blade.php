@extends('layouts.admin')

@section('content')
    
<div class="container">
    <h2>店編集</h2>
    <form method="post" action="{{ route('admin.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="store_name">店名</label>
            <input type="text" class="form-control" name="store_name" id="store_name" placeholder="店名" value="{{ old('store_name',$post->store_name) }}">
        </div>
        <div class="form-group">
            <label for="wait_people">待ち人数</label>
            <input type="number" class="form-control" name="wait_people" id="wait_people" placeholder="待ち人数" min="0" value="{{ old('wait_people',$post->wait_people) }}">
        </div>
        <div class="form-group">
            <label for="introduction">紹介</label>
            <input type="text" class="form-control" name="introduction" id="introduction" value="{{ old('introduction',$post->introduction) }}">
        </div>
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title',$post->title) }}">
        </div>
        <div class="form-group">
            <label for="content">コンテンツ</label>
            <input type="text" class="form-control" name="content" id="content" value="{{ old('content',$post->content) }}">
        </div>
        <div class="form-group">
            <label for="cover_image">ファイル</label>
            <input type="file" class="form-control" name="cover_image" id="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">
                            更新する
        </button>
        <a class="btn btn-primary" href="{{route('admin.index')}}" role="button">戻る</a>
    </form>
    <br>

    <form method="post" action="/admin/{{ $post->id }}" >
    @csrf
    @method('DELETE')
    <button class="btn btn-primary" type="submit" >削除</button>
    </form>


</div><!-- /#accordion -->

@endsection('content')