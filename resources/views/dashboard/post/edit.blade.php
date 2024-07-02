@extends('dashboard.master')

@section('content')
    <div class="columns-xl mt-12">

        <form action="{{ route('post.update', $infoPost->id) }}" method="post" enctype="multipart/form-data">
            <div class="w-full px-2">
                @method('patch')

                @csrf

                @include('dashboard.post.form', ['task' => true])

                <button class="stylesButtonFromA stylesButtonEdit" type="submit">Editar</button>
            </div>
        </form>
    </div>
@endsection
