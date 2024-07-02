<div class="col-span-full mb-5">
    <label class="stylesLabel" for="title">Título</label>
    <input class="stylesInput" type="text" name="title" value="{{ old('title' , $infoPost->title) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="category_id">Categoría</label>
    <select class="stylesInput" name="category_id" id="category_id">
        @foreach($categories as $title => $id)
        <option value="{{ $id }}" {{ old('category_id' , ( ($infoPost->category_id == $id ) ? 'selected' : '' )) }}>{{ $title }}</option>
        @endforeach
    </select>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="slug">Slug</label>
    <input class="stylesInput" type="text" name="slug" value="{{ old('slug' , $infoPost->slug) }}">
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="content">Contenido</label>
    <textarea class="stylesInput" name="content" id="content">{{ old('content' , $infoPost->content) }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="description">Descripción</label>
    <textarea class="stylesInput" name="description" id="description">{{ old('description' , $infoPost->description) }}</textarea>
</div>

<div class="col-span-full mb-5">
    <label class="stylesLabel" for="posted">Publicado</label>
    <select class="stylesInput" name="posted" id="posted">
        <option value="not" {{ old('posted' , ( ($infoPost->posted == 'not' ) ? 'selected' : '' )) }}>No</option>
        <option value="yes" {{ old('posted' , ( ($infoPost->posted == 'yes' ) ? 'selected' : '' )) }}>Sí</option>
    </select>
</div>


@if( isset($task) && $task)
    <div class="col-span-full mb-5">
        <label class="stylesLabel" for="image">Imagen</label>
        <input class="stylesInput" type="file" name="image">
    </div>
@endif