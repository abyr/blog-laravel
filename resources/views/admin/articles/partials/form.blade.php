<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Draft</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Draft</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Article title"
    value="{{ $article->title or "" }}" required />

<label for="">Slug (Unique)</label>
<input class="form-control" type="text" name="slug" placeholder="Auto generetion"
       value="{{$article->slug or ""}}" readonly="" />

<label for="Parent article"></label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>


<label for="">Short desctiption</label>
<textarea class="form-control" name="description_short" id="description_short" cols="30" rows="10"
    >{{ $article->description_short or "" }}</textarea>

<label for="">Desctiption</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10"
    >{{ $article->description or "" }}</textarea>

<hr />

<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title"
    value="{{ $article->meta_title or "" }}" required />

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description"
    value="{{ $article->meta_description or "" }}" required />

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Meta keywords"
    value="{{ $article->meta_keywords or "" }}" required />

<hr />

<input class="btn btn-primary" type="submit" value="Save" />