<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('category::categories.form.name')) !!}
        <?php $old = $category->hasTranslation($locale) ? $category->translate($lang)->name : '' ?>
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]", $old), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('category::categories.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[slug]", trans('category::categories.form.slug')) !!}
        <?php $old = $category->hasTranslation($locale) ? $category->translate($lang)->slug : '' ?>
        {!! Form::text("{$lang}[slug]", Input::old("{$lang}[slug]", $old), ['class' => 'form-control slug', 'data-slug' => 'target', 'placeholder' => trans('category::categories.form.slug')]) !!}
        {!! $errors->first("{$lang}[slug]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[parent_id]", trans('category::categories.form.maincategory')) !!}
        {!! Form::select('parent_id', $category_list, old('parent_id', $category_parent->id), ['class' => 'form-control slug', 'data-slug' => 'target']) !!}
        {!! $errors->first("{$lang}[parent_id]", '<span class="help-block">:message</span>') !!}

    </div>
</div>
