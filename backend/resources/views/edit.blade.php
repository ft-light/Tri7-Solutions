@extends('layout')
@section('content')
<div class="cotainer">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">{{ $employee->first_name }} {{ $employee->last_name }}</div>
        <div class="card-body">
          <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="firstname" class="form-label">First Name</label>
                <input type="text" id="firstname" class="form-control" name="first_name" required>
                @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Last Name</label>
                <input type="text" id="lastname" class="form-control" name="last_name" required>
                @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
            </div>
            @if (auth()->user()->role == "Manager")
              <div class="mb-3">
                <label for="position" class="form-label">Last Name</label>
                  <select name="position" class="form-control" required>
                    <option value="">Select Position</option>
                    <option value="Web Developer">Web Developer</option>
                    <option value="Web Designer">Web Designer</option>
                  </select>
                  @if ($errors->has('position'))
                  <span class="text-danger">{{ $errors->first('position') }}</span>
                  @endif
              </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection