@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Users CRUD App with Ajax</h1>
        </div>
    </div>

    <h2>Autos</h2>
    <div class="row">
        <table class="table table-stripped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand</th>
                <th>User's ID</th>
            </tr>

            @foreach($autos as $auto)
                <tr>
                    <td>{{ $auto->id }} </td>
                    <td>{{ $auto->name }} </td>
                    <td>{{ $auto->brand }} </td>
                    <td>{{ $auto->user_id }} </td>
                    <td>
                        <form class="" action="{{ route('auto.destroy', $auto->id) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('auto.edit', $auto->id) }}" class="btn bg-primary">Edit</a>
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');" name="name" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            <a href="{{ route('auto.create') }}" class="btn btn-info pull-right">Add new Auto</a><br><br><br>
        </table>

    </div>

@stop
