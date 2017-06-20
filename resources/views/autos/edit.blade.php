@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Edit auto</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form class="" action="{{ route('auto.update', $auto->id) }}" method="post">
                <input name="_method" type="hidden" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $auto->name }}">
                    {!! $errors->first('name', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('brand')) ? $errors->first('brand') : '' }}">
                    <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ $auto->brand }}">
                    {!! $errors->first('brand', '<p class="help-block":message</p>' ) !!}
                </div>
                <div class="form-group{{ ($errors->has('user_id')) ? $errors->first('user_id') : '' }}">
                    <input type="text" name="user_id" class="form-control" placeholder="User's ID" value="{{ $auto->user_id }}">
                    {!! $errors->first('user_id', '<p class="help-block":message</p>' ) !!}
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="save">
                </div>
            </form>
        </div>
    </div>


@stop