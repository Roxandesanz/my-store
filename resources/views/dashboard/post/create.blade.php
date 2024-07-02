@extends('dashboard.master')

@section('content')
    <div class="columns-xl mt-12">
        @include('dashboard.fragments.errors-form')

        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <!-- <label for="title">Título</label>
            <input type="text" name="title">
            <label for="category_id">Categoría</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $title => $id)
    <option value="{{ $id }}">{{ $title }}</option>
    @endforeach
            </select>
            <label for="slug">Slug</label>
            <input type="text" name="slug">
            <label for="content">Contenido</label>
            <textarea name="content" id="content"></textarea>
            <label for="description">Descripción</label>
            <textarea name="description" id="description"></textarea>
            <label for="posted">Publicado</label>
            <select name="posted" id="posted">
                <option value="not">No</option>
                <option value="yes">Sí</option>
            </select> -->
            <div class="w-full px-2">

                @include('dashboard.post.form')

                <button class="stylesButtonFromA stylesButtonCreate" type="submit">Guardar</button>
            </div>
        </form>
    </div>
@endsection
