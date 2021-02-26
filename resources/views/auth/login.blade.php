@extends('layouts.app')


@section('content')

    <div class="container col-6 justify-content-center">

        <form action="{{route('login')}}" method="post">

        @csrf


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

                <span><input type="checkbox" name="remember" id=""> Remember Me</span>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>

        </form>



    </div>

@endsection