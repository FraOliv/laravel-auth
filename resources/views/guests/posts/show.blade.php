
@extends('layouts.app')
@section('content')
<h2>Post  ID {{ $post->id }}</h2>
  
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
  
@endsection