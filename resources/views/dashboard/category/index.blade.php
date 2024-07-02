@extends('dashboard.master')

@section('content')
    <div class="mx-8 my-5">
        <a href="{{ route('category.create') }}" target="_blank" class="stylesButtonFromA stylesTolinkToNew">Nueva categoría</a>
    </div>

    <div class="w-full px-2">
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
                @foreach ($categoryList as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <div class="grid grid-cols-3 justify-items-center">
                                
                                    <a class="stylesButtonFromA stylesButtonEdit"
                                        href="{{ route('category.edit', $category->id) }}">Editar</a>
                              

                                
                                    <a class="stylesButtonFromA stylesButtonShow"
                                        href="{{ route('category.show', $category->id) }}">Mostrar</a>
                              

                                
                                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="stylesButtonFromA stylesButtonDelete"
                                            type="submit">Eliminar</button>
                                    </form>
                              
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $categoryList->links() }}
@endsection
