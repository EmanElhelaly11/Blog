@extends('layout')

@section('content')
@foreach ($posts as $post)
<article>
  <h1>
    <a href="/posts/{{ $post->slug }}">
      {{ $post->title }}
    </a>
  </h1>
  <div class="">
    {{ $post->excerpt }}
  </div>
</article>
@endforeach

@endsection