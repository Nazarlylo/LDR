<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('product::products.form.name')) !!}
        <?php $old = $product->hasTranslation($locale) ? $product->translate($lang)->name : '' ?>
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]", $old), ['class' => 'form-control', 'placeholder' => trans('product::products.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[value]", trans('product::products.form.value')) !!}
        <?php $old = $product->hasTranslation($locale) ? $product->translate($lang)->value : '' ?>
        {!! Form::text("{$lang}[value]", Input::old("{$lang}[value]", $old), ['class' => 'form-control slug', 'placeholder' => trans('product::products.form.value')]) !!}
        {!! $errors->first("{$lang}[value]", '<span class="help-block">:message</span>') !!}
    </div>
</div>
