@extends('layouts.app')

@section('content')

<div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
      <a href="{{ route('employee.create')}}" class="btn btn-success btn-sm mt-1">Create</a>
  <table class="table mt-1 text-center">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>First name</td>
          <td>Last name</td>
          <td>Patronymic</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->fname}}</td>
            <td>{{$employee->sname}}</td>
            <td>{{$employee->pname}}</td>
            <td class="text-center">
                <a href="{{ route('employee.show', $employee->id)}}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('employee.edit', $employee->id)}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('employee.destroy', $employee->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
      <?php echo $employees->render(); ?>
<div>
@endsection
