{{--<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>--}}
<div id="modalDelete" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Warning!</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this post?</p>
            </div>
            <div class="modal-footer">

                {!! Form::open(['route'=>['post.destroy',$post->id], 'method'=>'DELETE']) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {{Form::button('<i class="glyphicon glyphicon-trash"></i>&nbsp Delete', array(
                       'type' => 'submit',
                       'class'=> 'btn btn-danger'
                ))}}
                {!! Form::close() !!}

            </div>
        </div>

    </div>
</div>
