@extends('dashboard.master')

@section('content')

@include('dashboard.fragments.errors-form')
<a href="{{ route('post.create') }}" target="_blank">Nuevo post</a>

<table>
    <thead>
        <th>#</th>
        <th>Título</th>
        <th>Posteado</th>
        <th>Categoría</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->posted }}</td>
            <td>{{ $post->category_id }}</td>
            <td>
                <a href="{{ route('post.edit', $post->id) }}">Editar</a>
                <a href="{{ route('post.show', $post->id) }}">Mostrar</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links()  }}

@endsection('content')