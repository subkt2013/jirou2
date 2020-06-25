@extends('layouts.app')

@section('content')
<div class="container">
    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                店名{{$post->store_name}}画像　
                行列{{$post->wait_people}} 人待ち
                更新日時 {{$post->updated_at}}
            <div class="card-body">
                <a href="#">待ち人数</a>
            </div>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                現在の待ち人数を入力する
            </a>
        </li>
        </ul>
    </div>
    
    @if ((new Carbon\Carbon())->diffInMinutes($post->created_at) < 5 )
        <strong>New!</strong>
    @endif

</div>
@endsection('content')