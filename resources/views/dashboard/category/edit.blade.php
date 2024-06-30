@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')

<form action="{{ route('category.update', $category->id) }}" method="post">
    @method('patch')

    @csrf

    @include('dashboard.category.form', [ 'task' => true ])

    <button type="submit">Submit</button>
</form>
@endsection('content')