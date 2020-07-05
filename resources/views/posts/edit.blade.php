@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" 
          action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT')


        <p>
            <label>現在の待ち人数</label>
            <input type="number" name="wait_people" value="{{ old('wait_people',$post->wait_people) }}" min="0" />
        </p>
        <p>
            <label>更新日時</label>
            <input type="hidden" name="updated_at" value="{{ old('updated_at',$post->updated_at) }}"/>
        </p>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit">更新</button>
    </form>
</div>
@endsection