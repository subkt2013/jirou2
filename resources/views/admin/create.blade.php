@extends('layouts.app')

@section('content')
    
<div class="container">
    <h2>店登録</h2>
    <form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="store_name">店名</label>
            <input type="text" class="form-control" name="store_name" id="store_name" placeholder="店名">
        </div>
        <div class="form-group">
            <label for="wait_people">待ち人数</label>
            <input type="number" class="form-control" name="wait_people" id="wait_people" placeholder="待ち人数">
        </div>
        <div class="form-group">
            <label for="introduction">紹介</label>
            <input type="text" class="form-control" name="introduction" id="introduction">
        </div>
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">コンテンツ</label>
            <input type="text" class="form-control" name="content" id="content">
        </div>
        <div class="form-group">
            <label for="cover_image">ファイル</label>
            <input type="file" class="form-control" name="cover_image" id="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">
                            更新する
        </button>
    </form>
</div><!-- /#accordion -->

@endsection('content')