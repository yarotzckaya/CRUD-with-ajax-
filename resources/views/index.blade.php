@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Users CRUD App with Ajax</h1>
        </div>
    </div>

    <h2>Users</h2>

    <div class="row">
        <table class="table table-stripped">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Country</th>
                <th>Action</th>
            </tr>

                @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }} </td>
                            <td>{{ $user->first_name }} </td>
                            <td>{{ $user->last_name }} </td>
                            <td>{{ $user->password }} </td>
                            <td>{{ $user->email }} </td>
                            <td>{{ $user->address }} </td>
                            <td>{{ $user->city }} </td>
                            <td>{{ $user->country }} </td>
                            <td>
                                <form class="" action="{{ route('user.destroy', $user->id) }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn bg-primary">Edit</a>
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');" name="name" value="delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach

            <div class="form">
                <div class="col-lg-15">
                    <div class="col-lg-10">
                 <a href="{{ route('user.create') }}" class="btn btn-info pull-right">Add new User</a>
                    </div>
                    <div class="col-md-lg-12">
                 <a class="btn btn-info pull-right" href="{{ route('auto.index') }}">Autos</a>
                 </div>
                </div><br><br><br>
            </div>
        </table>

    </div>

    @stop
