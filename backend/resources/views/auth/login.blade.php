@extends('layout')
@section('content')
<div class="cotainer">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">LOGIN</div>
        <div class="card-body">
          @if(session()->has('error'))
            <div class="alert alert-danger">
              {{ session()->get('error') }}
            </div>
          @endif
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
                <input type="text" id="username" class="form-control" name="username">
                @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection