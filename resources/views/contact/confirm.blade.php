@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
        <h4><label>メールアドレス</label></h4>
        <p>{{ $inputs['email'] }}</p>

        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">


        <h4><label>タイトル</label></h4>
        <p>{{ $inputs['title'] }}</p>
        <input
            name="title"
            value="{{ $inputs['title'] }}"
            type="hidden">


        <h4><label>内容</label></h4>
        <p>{!! nl2br(e($inputs['body'])) !!}</p>
        <input
            name="body"
            value="{{ $inputs['body'] }}"
            type="hidden">

        <button type="submit" name="action" value="back">
            入力内容修正
        </button>
        <button type="submit" name="action" value="submit">
            送信する
        </button>
    </form>
</div>
@endsection