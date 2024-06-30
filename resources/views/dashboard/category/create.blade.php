@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')

<form action="{{ route('category.store') }}" method="post">
    @csrf
    
    @include('dashboard.category.form')

    <button type="submit">Submit</button>
</form>
@endsection('content')