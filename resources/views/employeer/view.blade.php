@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        <a href="{{ route('employee.edit', $employee->id)}}" class="btn btn-success btn-sm">Edit</a>
        <a href="{{ route('employee.index')}}" class="btn btn-success btn-sm">All</a>
    </div>

    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">First name</label>
                </div>
                <div class="col-md-8 col-6">{{ $employee->fname }}</div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Last name</label>
                </div>
                <div class="col-md-8 col-6">{{ $employee->sname }}</div>
            </div>
            <hr/><div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Patronymic</label>
                </div>
                <div class="col-md-8 col-6">{{ $employee->pname }}</div>
            </div>
            <hr/>
        </div>
    </div>
</div>
@endsection
