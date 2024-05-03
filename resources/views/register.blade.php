@extends('layout')

@section('title')
    register
@endsection


@section('content')
<div class="container w-25 p-3 mt-5" style="background-color: #F0EBE3; border-radius:20px">
    <h3>Register-page</h3>
    <form action="{{ route('register.post') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name='name'>
          </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name='email'>
        </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name='password' >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>    
@endsection