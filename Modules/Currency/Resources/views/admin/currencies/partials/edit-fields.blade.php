<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('currency::currencies.form.name')) !!}
        <?php $old = $currency->hasTranslation($locale) ? $currency->translate($lang)->name : '' ?>
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]", $old), ['class' => 'form-control', 'placeholder' => trans('currency::category.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[slug]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[value]", trans('currency::currencies.form.value')) !!}
        <?php $old = $currency->hasTranslation($locale) ? $currency->translate($lang)->value : '' ?>
        {!! Form::text("{$lang}[value]", Input::old("{$lang}[value]", $old), ['class' => 'form-control slug', 'placeholder' => trans('currency::currencies.form.value')]) !!}
        {!! $errors->first("{$lang}[value]", '<span class="help-block">:message</span>') !!}
    </div>
</div>
