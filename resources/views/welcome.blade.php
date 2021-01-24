@extends('layouts.app')

@section('content')

    <div class="container h-100">
        <div class="d-flex align-items-center flex-column">
            <div class="mt-auto p-2">
                <button type="button" class="btn btn-primary">
                    <a class="btn btn-primary btn-lg" href="{{ url('/employee') }}" role="button">Employees</a>
                </button>
            </div>
        </div>
    </div>
@endsection
