@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Fill in the Form </h1>
        <div class="row">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-heading">Finance</div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('finance.post') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">First name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">Last name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <label for="phone_number" class="col-md-4 control-label">Phone number</label>

                                    <div class="col-md-6">
                                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                        @if ($errors->has('phone_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
                                    <label for="id_number" class="col-md-4 control-label">Id number</label>

                                    <div class="col-md-6">
                                        <input id="id_number" type="text" class="form-control" name="id_number" value="{{ old('id_number') }}" required autofocus>

                                        @if ($errors->has('id_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection