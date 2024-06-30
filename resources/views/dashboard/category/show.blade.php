@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')

<h1> {{ $category->title }} </h1>

<p>
   <strong>Slug</strong>: <br> {{ $category->slug }}
</p>

@endsection('content')