@extends('layouts.mainlayout2')

@section('header')

    <section class="jumbotron text-center">
    <div class="container">
    <h1 class="jumbotron-heading">Add Post</h1>

    </div>
    </section>

@endsection


@section('content')


{{--open form--}}
{!! Form::open([
    'method'=>'post',
    'action'=>'PostsController@store'
]) !!}



    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'enter title']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'enter content']) !!}
    </div>


   <input type="hidden" name="user_id" value="{{$user->id}}">


   {{ csrf_field() }}

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

   {{--<button type="submit" class="btn btn-primary">Submit</button>--}}


{!! Form::close() !!}
<p></p>
@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection






