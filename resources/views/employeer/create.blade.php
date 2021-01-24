@extends('layouts.app')

@section('content')

    <div class="card mt-5">
        <div class="card-header">
            Create User
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('employee.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" name="fname"/>
                </div>
                <div class="form-group">
                    <label for="sname">Last name</label>
                    <input type="text" class="form-control" name="sname"/>
                </div>
                <div class="form-group">
                    <label for="phone">Patronymic</label>
                    <input type="text" class="form-control" name="pname"/>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
