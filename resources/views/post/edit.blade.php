@extends('main')
@section('content')
    <div class="well">
        {!! Form::model($post,['route'=>['post.update',$post->id],'method'=>'PUT']) !!}
        {{Form::label('title','Title:')}}
        {{Form::text('title', null, array('class'=>'form-control input-lg','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

        {{Form::label('slug','Slug:')}}
        {{Form::text('slug', null, array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

        {{Form::label('body','Body:')}}
        {{Form::textarea('body', null, array('class'=>'form-control','required'=>'','minlength'=>'50'))}}


        <hr>
        <p class="text-right ">
            <strong>
                <a href="{{route('post.index')}}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> &nbsp Cancel</a>

                {{Form::button('<i class="glyphicon glyphicon-floppy-save"></i>&nbsp Save', array(
                       'type' => 'submit',
                       'class'=> 'btn btn-primary btn-sm'
                ))}}
                {{--{{Form::submit('Save',array('class'=>'btn btn-block btn-primary'))}}--}}

            </strong>
        </p>
        {!! Form::close() !!}
    </div>

@stop