<div class="col-span-full mb-5">
    <label class="stylesLabel" for="title">Título</label>
    <input class="stylesInput" type="text" name="title" value="{{ old('title', $category->title) }}">
</div>
<div class="col-span-full mb-5">
    <label class="stylesLabel" for="slug">Slug</label>
    <input class="stylesInput" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
</div>
