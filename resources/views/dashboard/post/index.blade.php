@extends('dashboard.master')

@section('content')
    <div class="mx-8 my-5">
        <a href="{{ route('post.create') }}" target="_blank" class="stylesButtonFromA stylesTolinkToNew">Nuevo post</a>
    </div>

    <div class="w-full px-2">
        <table class="table-styles-tailwind">
            <caption class="caption-top captionTableList">
                Listado de Posts
            </caption>
            <thead>
                <th>#</th>
                <th>Título</th>
                <th>Posteado</th>
                <th>Categoría</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->posted }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>
                            <div class="grid grid-cols-3 justify-items-center">
                                <a class="stylesButtonFromA stylesButtonEdit"
                                    href="{{ route('post.edit', $post->id) }}">Editar</a>
                                <a class="stylesButtonFromA stylesButtonShow"
                                    href="{{ route('post.show', $post->id) }}">Mostrar</a>
                                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="stylesButtonFromA stylesButtonDelete" type="submit">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $posts->links() }}
@endsection('content')
