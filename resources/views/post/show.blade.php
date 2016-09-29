@extends('main')

@section('content')
    <div class="well">

        <!-- Blog Post -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="avatar">
            </a>
            <div class="media-body">
                <p class="lead" id="author">
                    by: <a href="#">Jhon Doe</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span>{{date(' M j, Y h:ia', strtotime($post->created_at))}}</p>
                <hr>
            </div>
        </div>

        <h3>
            <a href="#">{{$post->title}}</a>
        </h3>

        <img class="img-responsive" src="{{URL::to('uploads/images/2.png')}}" alt="">
        <hr>
        <p>{{$post->body}}</p>


        <hr>
        <p class="text-right ">
            <strong>
                <a href="{{route('post.edit',$post->id)}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span>&nbsp Edit</a>
                {{--<a href="{{route('post.destroy',$post->id)}}" class="" id="trash-btn"><span class="glyphicon glyphicon-trash"></span>Delete</a>--}}
                <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalDelete"><span class="glyphicon glyphicon-trash"></span>&nbsp Delete</a>
            </strong>
        </p>
        <hr>



        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="avatar">
                </a>
            </div>
            <div class="media-body">
                {!! Form::open(array('route'=>'post.index')) !!}
                {{Form::textarea('comment','Leave a Comment',array('rows'=>'2', 'class'=>"form-control"))}}
                {{Form::submit('Cancel',array('class'=>'btn btn-default btn-sm col-sm-offset-8', 'id'=>'comment-btn'))}}
                {{Form::submit('Comment',array('class'=>'btn btn-primary btn-sm', 'style'=>'margin-top:15px;'))}}
                {!! Form::close() !!}
            </div>
        </div>

    </div>






@stop
@include('partial.modal-delete')