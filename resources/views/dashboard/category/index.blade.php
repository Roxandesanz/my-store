@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')
<a href="{{ route('category.create') }}" target="_blank">Nuevo post</a>

<table>
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

{{ $categoryList->links()  }}

@endsection