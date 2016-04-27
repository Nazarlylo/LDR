<div class="box-body">
    <div class='form-group{{ $errors->has("{$lang}[name]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[name]", trans('product::products.form.name')) !!}
        {!! Form::text("{$lang}[name]", Input::old("{$lang}[name]"), ['class' => 'form-control', 'placeholder' => trans('product::products.form.name')]) !!}
        {!! $errors->first("{$lang}[name]", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("{$lang}[value]") ? ' has-error' : '' }}'>
        {!! Form::label("{$lang}[value]", trans('product::products.form.value')) !!}
        {!! Form::text("{$lang}[value]", Input::old("{$lang}[value]"), ['class' => 'form-control value', 'placeholder' => trans('product::products.form.value')]) !!}
        {!! $errors->first("{$lang}[value]", '<span class="help-block">:message</span>') !!}
    </div>
</div>
