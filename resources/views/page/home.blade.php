@extends('main')
@section('activeHome','active')
@section('content')
    @foreach($post as $posts)
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
               <p><span class="glyphicon glyphicon-time"></span> Posted on {{date(' M j, Y h:ia', strtotime($posts->created_at))}}</p>
               <hr>
           </div>
       </div>

            <h3>
                <a href="{{route('blog.single', $posts->slug)}}">{{ $posts->title }}</a>
            </h3>

            {{--<img class="img-responsive" src="{{URL::to('uploads/images/2.png')}}" alt="">--}}
            <hr>
            <p>{{ substr($posts->body, 0, 250) }}{{strlen($posts->body)>250 ? "..." :""}}</p>
            <a class="btn btn-primary" href="{{route('blog.single', $posts->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>



   </div>


    @endforeach
    <div class="text-center">
        {{ $post->links()}}
        {{--{{ $post->total()}}--}}
        {{--<a href="{{ $post->previousPageUrl()}}">Previous</a>--}}
        {{--<a href="{{ $post->nextPageUrl()}}">Next</a>--}}

    </div>

            <!-- Pager -->
   {{--<ul class="pager">--}}
       {{--<li class="previous">--}}
           {{--<a href="#">&larr; Older</a>--}}
       {{--</li>--}}
       {{--<li class="next">--}}
           {{--<a href="#">Newer &rarr;</a>--}}
       {{--</li>--}}
   {{--</ul>--}}

@stop
