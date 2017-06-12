@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Edit</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('user.update', $user->id) }}" method="post">
                <input name="_method" type="hidden" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group{{ ($errors->has('first_name')) ? $errors->first('first_name') : '' }}">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $user->first_name }}">
                    {!! $errors->first('first_name', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('last_name')) ? $errors->first('last_name') : '' }}">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $user->last_name }}">
                    {!! $errors->first('last_name', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                    {!! $errors->first('email', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('password')) ? $errors->first('password') : '' }}">
                    <input type="text" name="password" class="form-control" placeholder="Password" value="{{ $user->password }}">
                    {!! $errors->first('password', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('address')) ? $errors->first('address') : '' }}">
                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $user->address }}">
                    {!! $errors->first('address', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('city')) ? $errors->first('city') : '' }}">
                    <input type="text" name="city" class="form-control" placeholder="City" value="{{ $user->city }}">
                    {!! $errors->first('city', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('country')) ? $errors->first('country') : '' }}">
                    <input type="text" name="country" class="form-control" placeholder="Country" value="{{ $user->last_name }}">
                    {!! $errors->first('name', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="save">
                </div>
            </form>
        </div>
    </div>


@stop