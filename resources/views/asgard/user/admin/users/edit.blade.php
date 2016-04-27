@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('user::users.title.edit-user') }} <small>{{ $user->present()->fullname() }}</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
    <li class=""><a href="{{ URL::route('admin.user.user.index') }}">{{ trans('user::users.breadcrumb.users') }}</a></li>
    <li class="active">{{ trans('user::users.breadcrumb.edit-user') }}</li>
</ol>
@stop

@section('content')
{!! Form::open(['route' => ['admin.user.user.update', $user->id], 'method' => 'put']) !!}
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1-1" data-toggle="tab">{{ trans('user::users.tabs.data') }}</a></li>
                <li class=""><a href="#tab_2-2" data-toggle="tab">{{ trans('user::users.tabs.roles') }}</a></li>
                <li class=""><a href="#tab_3-3" data-toggle="tab">{{ trans('user::users.tabs.permissions') }}</a></li>
                <li class=""><a href="#password_tab" data-toggle="tab">{{ trans('user::users.tabs.new password') }}</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1-1">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    {!! Form::label('username', trans('user::users.form.username')) !!}
                                    {!! Form::text('username', Input::old('username',$user->username), ['class' => 'form-control', 'placeholder' => trans('user::users.form.username')]) !!}
                                    {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    {!! Form::label('first_name', trans('user::users.form.first-name')) !!}
                                    {!! Form::text('first_name', Input::old('first_name', $user->first_name), ['class' => 'form-control', 'placeholder' => trans('user::users.form.first-name')]) !!}
                                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    {!! Form::label('last_name', trans('user::users.form.last-name')) !!}
                                    {!! Form::text('last_name', Input::old('last_name', $user->last_name), ['class' => 'form-control', 'placeholder' => trans('user::users.form.last-name')]) !!}
                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email', trans('user::users.form.email')) !!}
                                    {!! Form::email('email', Input::old('email', $user->email), ['class' => 'form-control', 'placeholder' => trans('user::users.form.email')]) !!}
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('email_2') ? ' has-error' : '' }}">
                                    {!! Form::label('email_2', trans('user::users.form.email_2')) !!}
                                    {!! Form::email('email_2', Input::old('email_2',$user->email_2), ['class' => 'form-control', 'placeholder' => trans('user::users.form.email_2')]) !!}
                                    {!! $errors->first('email_2', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('mobile_phone') ? ' has-error' : '' }}">
                                    {!! Form::label('mobile_phone', trans('user::users.form.mobile_phone')) !!}
                                    {!! Form::text('mobile_phone', Input::old('mobile_phone',$user->mobile_phone), ['class' => 'form-control', 'placeholder' => trans('user::users.form.mobile_phone')]) !!}
                                    {!! $errors->first('mobile_phone', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    {!! Form::label('address', trans('user::users.form.address')) !!}
                                    {!! Form::text('address', Input::old('address',$user->address), ['class' => 'form-control', 'placeholder' => trans('user::users.form.address')]) !!}
                                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                    {!! Form::label('postcode', trans('user::users.form.postcode')) !!}
                                    {!! Form::text('postcode', Input::old('postcode',$user->postcode), ['class' => 'form-control', 'placeholder' => trans('user::users.form.postcode')]) !!}
                                    {!! $errors->first('postcode', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                                    {!! Form::label('place', trans('user::users.form.place')) !!}
                                    {!! Form::text('place', Input::old('place',$user->postcode), ['class' => 'form-control', 'placeholder' => trans('user::users.form.place')]) !!}
                                    {!! $errors->first('place', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                                    {!! Form::label('address_2', trans('user::users.form.address_2')) !!}
                                    {!! Form::text('address_2', Input::old('address_2',$user->address_2), ['class' => 'form-control', 'placeholder' => trans('user::users.form.address_2')]) !!}
                                    {!! $errors->first('address_2', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('address_3') ? ' has-error' : '' }}">
                                    {!! Form::label('address_3', trans('user::users.form.address_3')) !!}
                                    {!! Form::text('address_3', Input::old('address_3',$user->address_3), ['class' => 'form-control', 'placeholder' => trans('user::users.form.address_3')]) !!}
                                    {!! $errors->first('address_3', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('address_4') ? ' has-error' : '' }}">
                                    {!! Form::label('address_4', trans('user::users.form.address_4')) !!}
                                    {!! Form::text('address_4', Input::old('address_4',$user->address_4), ['class' => 'form-control', 'placeholder' => trans('user::users.form.address_4')]) !!}
                                    {!! $errors->first('address_4', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="checkbox{{ $errors->has('activated') ? ' has-error' : '' }}">
                                    <input type="hidden" value="{{ $user->id === $currentUser->id ? '1' : '0' }}" name="activated"/>
                                    <?php $oldValue = (bool) $user->isActivated() ? 'checked' : ''; ?>
                                    <label for="activated">
                                        <input id="activated"
                                               name="activated"
                                               type="checkbox"
                                               class="flat-blue"
                                               {{ $user->id === $currentUser->id ? 'disabled' : '' }}
                                               {{ Input::old('activated', $oldValue) }}
                                               value="1" />
                                        {{ trans('user::users.form.is_activated') }}
                                        {!! $errors->first('activated', '<span class="help-block">:message</span>') !!}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_2-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ trans('user::users.tabs.roles') }}</label>
                                <select multiple="" class="form-control" name="roles[]">
                                    <?php foreach ($roles as $role): ?>
                                        <option value="{{ $role->id }}" <?php echo $user->hasRoleId($role->id) ? 'selected' : '' ?>>{{ $role->name }}</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab_3-3">
                    <div class="box-body">
                        @include('user::admin.partials.permissions', ['model' => $user])
                    </div>
                </div>
                <div class="tab-pane" id="password_tab">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>{{ trans('user::users.new password setup') }}</h4>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {!! Form::label('password', trans('user::users.form.new password')) !!}
                                    {!! Form::input('password', 'password', '', ['class' => 'form-control']) !!}
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    {!! Form::label('password_confirmation', trans('user::users.form.new password confirmation')) !!}
                                    {!! Form::input('password', 'password_confirmation', '', ['class' => 'form-control']) !!}
                                    {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>{{ trans('user::users.tabs.or send reset password mail') }}</h4>
                                <a href="#" class="btn btn-flat bg-maroon" data-toggle="tooltip" data-placement="bottom" title="Coming soon">
                                    {{ trans('user::users.send reset password email') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-flat">{{ trans('user::button.update') }}</button>
                    <button class="btn btn-default btn-flat" name="button" type="reset">{{ trans('core::core.button.reset') }}</button>
                    <a class="btn btn-danger pull-right btn-flat" href="{{ URL::route('admin.user.user.index')}}"><i class="fa fa-times"></i> {{ trans('user::button.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop
@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('user::users.navigation.back to index') }}</dd>
    </dl>
@stop
@section('scripts')
<script>
$( document ).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $(document).keypressAction({
        actions: [
            { key: 'b', route: "<?= route('admin.user.role.index') ?>" }
        ]
    });
    $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_flat-blue',
        radioClass: 'iradio_flat-blue'
    });
});
</script>
@stop
