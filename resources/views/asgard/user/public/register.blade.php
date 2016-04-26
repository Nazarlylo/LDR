@extends('layouts.account')
@section('title')
    {{ trans('user::auth.register') }} | @parent
@stop

@section('content')
    <div class="register-logo">
        <a href="{{ url('/') }}">{{ setting('core::site-name') }}</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">{{ trans('user::auth.register') }}</p>
        {!! Form::open(['route' => 'register.post']) !!}
        <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="username" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.username') }}" value="{{ old('username') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('role') ? ' has-error has-feedback' : '' }}">
            <select name="role" class="form-control">
                @foreach($roles as $role )
                    @if($role->id != 1)
                    <option value="{{$role->name}}">{{$role->name}}</option>
                    @endif
                @endforeach
            </select>
            {{--<input type="text" name="first_name" class="form-control" autofocus--}}
                   {{--placeholder="{{ trans('user::auth.role') }}" value="{{ old('role') }}">--}}
            {{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
            {!! $errors->first('role', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('first-name') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="first_name" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.first-name') }}" value="{{ old('first_name') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('first-name', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('last-name') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="last_name" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.last-name') }}" value="{{ old('last_name') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('last-name', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
            <input type="email" name="email" class="form-control"
                   placeholder="{{ trans('user::auth.email') }}" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="{{ trans('user::auth.password') }}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('user::auth.password confirmation') }}">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('email_2') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="email_2" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.email_2') }}" value="{{ old('email_2') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('email_2', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('mobile-phone') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="mobile_phone" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.mobile-phone') }}" value="{{ old('mobile_phone') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('mobile-phone', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('address') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="address" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.address') }}" value="{{ old('address') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('postcode') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="postcode" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.postcode') }}" value="{{ old('postcode') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('postcode', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('place') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="place" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.place') }}" value="{{ old('place') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('place', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('address_2') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="address_2" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.address_2') }}" value="{{ old('address_2') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('address_2', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('address_3') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="address_3" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.address_3') }}" value="{{ old('address_3') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('address_3', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group has-feedback {{ $errors->has('address_4') ? ' has-error has-feedback' : '' }}">
            <input type="text" name="address_4" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.address_4') }}" value="{{ old('address_4') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!! $errors->first('address_4', '<span class="help-block">:message</span>') !!}
        </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('user::auth.register me') }}</button>
                </div>
            </div>
        {!! Form::close() !!}

        <a href="{{ route('login') }}" class="text-center">{{ trans('user::auth.I already have a membership') }}</a>
    </div>
@stop
