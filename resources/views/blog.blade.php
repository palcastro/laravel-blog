@extends('layout')

@section('content')

    <div class="text3">
        <h1>OTRAS NOTICIAS </h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('blog.show', $post->slug) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="mural3"></div>
@endsection
