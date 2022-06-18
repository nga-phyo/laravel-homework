


@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="container ">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf

                        <div class="mb-3">

                     <label for="email"> Email </label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">

              @error('email')
                 <div class="text-danger"> {{$message}}</div>
              @enderror
                        </div>

                        <div class="mb-3">
                            

                     <label for="password"> Password </label>
                     <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
       
                     @error('password')
                        <div class="text-danger"> {{$message}}</div>
                     @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 