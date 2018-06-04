<label>Название категории</label>
<input type="text" class="form-control" name="title" placeholder="Название" aria-label="Title" value="{{$category->title or ""}}" >
<p></p>
<label>Опубликовано</label>
<select class="form-control" name="published">

    @if(isset($category->id))
        <option value="1" @if ($category->published == 1) selected="1" @endif>Опубликовано</option>
        <option value="0" @if ($category->published == 0) selected="0" @endif>Не опубликовано</option>
    @else
        <option value="0">Опубликовано</option>
        <option value="0">Не опубликовано</option>
    @endif

</select>
<p></p>
<label>ЧПУ</label>
<input type="text" class="form-control" name="slug" readonly="" value="{{$category->slug or ""}}" placeholder="">
<p></p>
<label>Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0"> -- Без родительской категории --</option>
    @include('admin.category.partials.parent', ['categories' => $categories])
</select>

<hr />

<input type="submit" class="btn-primary" value="Сохранить">