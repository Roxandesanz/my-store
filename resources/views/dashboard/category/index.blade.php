@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')
@include('dashboard.fragments.message-form')

<div class="mx-8 my-5">
    <a href="{{ route('category.create') }}" target="_blank" class="stylesTolinkToNew">Nuevo post</a>
</div>

<div class="mx-8">
    <table class="table-styles-tailwind">
        <caption class="caption-top captionTableList">
            Listado de categorías
        </caption>
        <thead>
            <th>#</th>
            <th>Título</th>
            <th>Slug</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach($categoryList as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}">Editar</a>
                    <a href="{{ route('category.show', $category->id) }}">Mostrar</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $categoryList->links()  }}

@endsection