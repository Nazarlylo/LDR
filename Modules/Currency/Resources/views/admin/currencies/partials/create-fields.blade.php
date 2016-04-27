<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('currency::currencies.form.name')) !!}
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]"), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('currency::currencies.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[value]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[value]", trans('currency::currencies.form.value')) !!}
        {!! Form::text("{$lang}[value]", Input::old("{$lang}[value]"), ['class' => 'form-control value', 'data-value' => 'target', 'placeholder' => trans('currency::currencies.form.value')]) !!}
        {!! $errors->first("{$lang}[value]", '<span class="help-block">:message</span>') !!}
    </div>

</div>
