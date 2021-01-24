@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        <a href="{{ route('employee.show', $employee->id)}}" class="btn btn-success btn-sm">View</a>
        <a href="{{ route('employee.index')}}" class="btn btn-success btn-sm">All</a>
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
        <form method="post" action="{{ route('employee.update', $employee->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="fname">First name</label>
                <input type="text" class="form-control" name="fname" value="{{ $employee->fname }}" />
            </div>
            <div class="form-group">
                <label for="sname">Last name</label>
                <input type="text" class="form-control" name="sname" value="{{ $employee->sname }}" />
            </div>
            <div class="form-group">
                <label for="pname">Patronymic</label>
                <input type="text" class="form-control" name="pname" value="{{ $employee->pname }}" />
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update</button>
        </form>
    </div>
</div>
@endsection
