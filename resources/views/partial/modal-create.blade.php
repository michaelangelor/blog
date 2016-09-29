<div id="modalCreatePost" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Create New Post</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route'=>'post.store')) !!}
                {{Form::label('title','Title:')}}
                {{Form::text('title', null, array('class'=>'form-control input-lg','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

                {{Form::label('slug','Slug:')}}
                {{Form::text('slug', null, array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

                {{Form::label('body','Body:')}}
                {{Form::textarea('body', null, array('class'=>'form-control','required'=>'','minlength'=>'50'))}}


            <div class="modal-footer">
                <button type="button" class="btn btn-default" style="margin-top: 20px" data-dismiss="modal">Cancel</button>
                {{Form::submit('Submit',array('class'=>'btn btn-primary', 'id'=>'btn-create-post'))}}
                {!! Form::close() !!}
            </div>

            </div>
        </div>

    </div>
</div>
