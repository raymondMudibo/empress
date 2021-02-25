@extends('layouts.app')


@section('content')

    <div class="container col-6 justify-content-center">

        <form action="{{route('register')}}" method="post">

        @csrf

            <div class="mb-3">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" name="name" id="" class="form-control @error('name') border-danger @enderror" 
                placeholder="enter your name" value="{{old('name')}}">

                @error('name')
                <div class="text-danger"> 
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" name="email" id="" class="form-control @error('email') border-danger @enderror" 
                placeholder="enter your email address" value="{{old('email')}}">

                @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password" name="password" id="" class="form-control @error('password') border-danger @enderror"
                 placeholder="enter your password">

                @error('password')
                <div class="text-danger">
                        {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="font-weight-bold">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="" class="form-control @error('password_confirmation') border-danger @enderror" placeholder="please confirm password">

                @error('password_confirmation')
                <div class="text-danger">
                        {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">

                <span><input type="checkbox" name="checkbox" id=""> Remember Me</span>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary form-control">Register</button>
            </div>

        </form>



    </div>

@endsection