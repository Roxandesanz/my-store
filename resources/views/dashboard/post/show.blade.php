@extends('dashboard.master')

@section('content')

<h1> {{ $post->title }} </h1>

<p>
   <strong>Publicado</strong>: <br> {{ $post->posted }}
</p>
<p>
   <strong>Categoría</strong>: <br> {{ $post->category->title }}
</p>

<p>
   <strong>Descripción</strong>: <br> {{ $post->description }}
</p>

<p>
   <strong>Contenido</strong>: <br> {{ $post->content }}
</p>

<h3>Imagen</h3>
<img src="/uploads/posts/{{ $post->image }}" alt="{{ $post->image }}" width="20%">

@endsection('content')