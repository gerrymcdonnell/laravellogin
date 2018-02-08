@extends('layouts.mainlayout2')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>content</th>

      <th>created</th>
      <th>updated</th>
      <th></th>
      <th></th>

    </tr>
  </thead>
  <tbody>

    @foreach($posts as $post)

        <tr>
        <th scope='row'>{{$post->id}} </th>

            <td>
            <a href="{{route('posts.show',$post->id)}}">
            {{$post->title}}
            </a>
            </td>
            <td>{{$post->content}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>

            <td><a class="btn btn-primary" href="{{route('posts.edit',$post->id)}}">Edit </a></td>


            <td>
                <!--2nd way to delete -->
                {!! Form::open([
                'method'=>'delete',
                'action'=>['PostsController@destroy',$post->id]]) !!}

                {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}

                {!! Form::close() !!}

            </td>

        </tr>

    @endforeach

  </tbody>
</table>




@endsection




