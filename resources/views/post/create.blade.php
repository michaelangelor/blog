@extends('main')
@section('content')
    <div class="well">
        {!! Form::open(array('route'=>'post.store')) !!}
            {{Form::label('title','Title:')}}
            {{Form::text('title', null, array('class'=>'form-control input-lg','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

            {{Form::label('slug','Slug:')}}
            {{Form::text('slug', null, array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

        {{Form::label('body','Body:')}}
            {{Form::textarea('body', null, array('class'=>'form-control','required'=>'','minlength'=>'50'))}}

            {{Form::submit('Submit',array('class'=>'btn btn-block btn-primary', 'id'=>'btn-create-post'))}}
        {!! Form::close() !!}
    </div>
@stop