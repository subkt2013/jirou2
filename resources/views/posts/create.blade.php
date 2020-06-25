@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}"/>
        </p>
        
        <p>
            <label>Content</label>
            <input type="text" name="content" value="{{ old('content') }}"/>
        </p>

        <p>
            <label>Content</label>
            <input type="text" name="store_name" value="{{ old('store_name') }}"/>
        </p>

        <p>
            <label>Content</label>
            <input type="number" name="wait_people" value="{{ old('wait_people') }}"/>
        </p>
        
        <p>
            <label>Content</label>
            <input type="text" name="introduction" value="{{ old('introductions') }}"/>
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

        <button type="submit">Create!</button>
    </form>
</div>

@endsection