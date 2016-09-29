@extends('post-index')
@section('title','| Post Index')
@section('content')
    <div class="row">
        <h1>Post Index</h1>
        <a class="btn btn-primary " data-toggle="modal" data-target="#modalCreatePost"><span class="glyphicon glyphicon-plus"></span>&nbsp Create New Post</a>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead >
                    <th class="lead">Id</th>
                    <th class="lead">Title</th>
                    <th class="lead">Slug</th>
                    <th class="lead">Body</th>
                    <th class="lead">Created at</th>
                    <th class="lead">Action</th>
                </thead>
                <tbody>
                    @foreach($post as $posts)
                        <tr>
                            <td>{{$posts->id}}</td>
                            <td>{{ substr($posts->title, 0, 25) }}{{strlen($posts->title)>25? "..." :""}}</td>
                            <td>{{ substr($posts->slug, 0, 25) }}{{strlen($posts->body)>50 ? "..." :""}}</td>
                            <td>{{ substr($posts->body, 0, 50) }}{{strlen($posts->body)>50 ? "..." :""}}</td>
                            <td>{{date(' M j, Y h:ia', strtotime($posts->created_at))}}</td>
                            <td><a class="btn btn-default btn-xs" href="{{route('post.show',$posts->id)}}">View</a>
                                <a class="btn btn-success btn-xs" href="{{route('post.edit',$posts->id)}}">Edit</a>
                                {{--<a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalDelete">Delete</a>--}}
                                {{--<a class="btn btn-danger btn-xs" href="{{route('post.destroy',$posts->id)}}">Delete</a>--}}
                                {{--{!! Form::open(['route'=>['post.destroy',$post->id], 'method'=>'DELETE']) !!}--}}
                                {{--{{Form::submit('Delete',array('class'=>'btn btn-danger'))}}--}}
                                {{--{!! Form::close() !!}--}}



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {{ $post->links()}}
                {{--{{ $post->total()}}--}}
                {{--<a href="{{ $post->previousPageUrl()}}">Previous</a>--}}
                {{--<a href="{{ $post->nextPageUrl()}}">Next</a>--}}

              </div>

        </div>
    </div>

    @include('partial.modal-create')
    {{--@include('partial.modal-edit')--}}
@stop

