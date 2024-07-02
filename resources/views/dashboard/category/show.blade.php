@extends('dashboard.master')

@section('content')

<h1> {{ $category->title }} </h1>

<p>
   <strong>Slug</strong>: <br> {{ $category->slug }}
</p>

@endsection('content')