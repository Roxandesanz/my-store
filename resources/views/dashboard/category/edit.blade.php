@extends('dashboard.master')

@section('content')
    <div class="columns-xl mt-20">
        <form action="{{ route('category.update', $category->id) }}" method="post">
            <div class="w-full px-2">
                @method('patch')

                @csrf

                @include('dashboard.category.form', ['task' => true])

                <button class="stylesButtonFromA stylesButtonEdit" type="submit">Editar</button>
            </div>
        </form>
    </div>
@endsection('content')
