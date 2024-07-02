@extends('dashboard.master')

@section('content')
    <div class="columns-xl mt-12">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="w-full px-2">

                @include('dashboard.category.form')

                <button class="stylesButtonFromA stylesButtonCreate" type="submit">Guardar</button>
            </div>
        </form>
    </div>
@endsection
