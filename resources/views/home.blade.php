@extends('layouts.app')

@section('content')

<div class="container">
<h3><a href="{{ route('posts.index') }}">並びを確認する</a></h3>


<p></p>



<h3>サイトについて</h3>
<p>ラーメン二郎の並びが分かるサイトです。<br>並びは善意の投稿によって更新されています。<br>ラーメン二郎の付近にいる方は投稿をお願いします<(_ _)></p>    


</div><!-- /#accordion -->

@endsection