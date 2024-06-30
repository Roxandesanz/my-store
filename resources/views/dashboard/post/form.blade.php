<label for="title">Título</label>
<input type="text" name="title" value="{{ old('title' , $infoPost->title) }}">
<label for="category_id">Categoría</label>
<select name="category_id" id="category_id">
    @foreach($categories as $title => $id)
    <option value="{{ $id }}" {{ old('category_id' , ( ($infoPost->category_id == $id ) ? 'selected' : '' )) }}>{{ $title }}</option>
    @endforeach
</select>
<label for="slug">Slug</label>
<input type="text" name="slug" value="{{ old('slug' , $infoPost->slug) }}">
<label for="content">Contenido</label>
<textarea name="content" id="content">{{ old('content' , $infoPost->content) }}</textarea>
<label for="description">Descripción</label>
<textarea name="description" id="description">{{ old('description' , $infoPost->description) }}</textarea>
<label for="posted">Publicado</label>
<select name="posted" id="posted">
    <option value="not" {{ old('posted' , ( ($infoPost->posted == 'not' ) ? 'selected' : '' )) }}>No</option>
    <option value="yes" {{ old('posted' , ( ($infoPost->posted == 'yes' ) ? 'selected' : '' )) }}>Sí</option>
</select>

@if( isset($task) && $task)
<label for="image">Imagen</label>
<input type="file" name="image">
@endif