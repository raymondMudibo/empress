@extends('layouts.app')


@section('content')

<div class="container justify-content-center">

    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="post_title" class="font-weight-bold">Title</label>
            <input type="text" name="post_title" id="" class="form-control">
            <small>By {{auth()->user()->name}} on( Date goes here)</small>
        </div>

        <div class="mb-3">
            <label for="post_content" class="font-weight-bold">Post Content</label>
            <textarea name="post_content" id="editor" cols="300" rows="300"class="form-control"></textarea>
            
        </div>


        <button type="submit" class="btn btn-primary">Post</button>


    </form>


</div>




@endsection