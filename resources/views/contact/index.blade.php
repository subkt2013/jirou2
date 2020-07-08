@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf
    <div class="form-group">
        <label  for="email">メールアドレス</label>
        <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        @if ($errors->has('email'))
            <p class="error-message">メールアドレスを入力してください</p>
        @endif
    </div>

    <div class="form-group">
        <label for="title">タイトル</label>
        <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" >
        @if ($errors->has('title'))
            <p class="error-message">タイトルを入力してください</p>
        @endif
    </div>

    <div class="form-group">
        <label>内容</label>
        <textarea name="body" class="form-control" rows="4"></textarea>
        @if ($errors->has('body'))
            <p class="error-message">お問い合わせ内容を入力してください</p>
        @endif
    </div>
        <button type="submit" class="btn btn-primary">
            入力内容確認
        </button>
    </form>
</div>
@endsection