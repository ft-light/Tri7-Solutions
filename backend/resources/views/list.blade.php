@extends('layout')
@section('content')
<div class="container">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <div class="text-right">
    <a href="{{ route('employees.create') }}" class="btn btn-success">Add</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Position</th>
          <th>Create Date</th>
          <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
        <tr>
          <td>{{ $employee->id }}</td>
          <td>{{ $employee->first_name }}</td>
          <td>{{ $employee->last_name }}</td>
          <td>{{ $employee->position }}</td>
          <td>{{ $employee->created_at }}</td>
          <td class="text-center">
            <a class="btn btn-warning btn-sm" href="{{ route('employees.edit', $employee->id)}}">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id)}}" method="POST" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection