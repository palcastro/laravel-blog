@extends('layout')

@section('content')
    {{-- <h1>Página de Posts</h1> --}}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endsection
