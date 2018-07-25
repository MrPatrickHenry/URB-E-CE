@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <div class="logo">
                        <img src="/images/logo/2020-logo-RGB.png" width=200>
                    </div>
                    <form method="POST" action="https://20-twenty.online/register">
                        @csrf


                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ __('E-Mail Address') }}">

                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                              <select class="form-control" name="account_type" id="account_type" placeholder="{{ __('Account Type') }}" required>
                                <option value="" disabled selected>{{ __('Account Type') }}</option>
                                <option value="Agency">Agency</option>
                                <option value="Brand">Brand</option>
                                <option value="Publisher">Creative</option>
                                <option value="Publisher">Publisher</option>
                            </select>
                        </div>


                        @if ($errors->has('account_type'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('account_type') }}</strong>
                        </span>
                        @endif
                    </div>




                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="business_name" type="text" class="form-control{{ $errors->has('business_name') ? ' is-invalid' : '' }}" name="business_name" value="{{ old('business_name') }}" placeholder="{{ __('Business Name') }}" required>

                            @if ($errors->has('business_name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('business_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="business_title" type="text" class="form-control{{ $errors->has('business_title') ? ' is-invalid' : '' }}" name="business_title" value="{{ old('business_title') }}" placeholder="{{ __('Business Title') }}" required>

                            @if ($errors->has('business_title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('business_title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>




                    <div class="form-group row">

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }}">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                        </div>
                    </div>
                    @include('includes.gdpr')


                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-grad">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="clear: both"></div>

@endsection
