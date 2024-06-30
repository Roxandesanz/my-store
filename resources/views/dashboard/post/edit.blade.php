@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')

<form action="{{ route('post.update', $infoPost->id) }}" method="post" enctype="multipart/form-data">
    @method('patch')

    @csrf

    @include('dashboard.post.form', [ 'task' => true ])

    <button type="submit">Submit</button>
</form>
@endsection('content')