@extends('layouts.app')

@section('content')

    <section id="blog" class="container">
        <div class="center">
            <h2>Blogs</h2>
        </div>
        <div class="blog">
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                   @foreach ($blogs as $blog)
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span><i class="fa fa-user"></i> <a href="#">{{$blog->author_name}}</a></span>
                                        <span id="publish_date"> {{date('d M',substr($blog->last_update,0,10) )}}</span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8 blog-content">
                                    @if($blog->media_link  !== '')
                                        <div col-sm-6 class="responsive-video" style="margin-bottom:10px;"><iframe width="420" height="315" src="{{$blog->media_link}}" frameborder="0" allowfullscreen></iframe></div>
                                    @elseif(trim($blog->image_url) !== '')
                                            <div col-sm-6><img style="width:420px; margin-bottom:10px;" src="{{url('images/blog').'/'.$blog->image_url}}" @if($blog->image_alt_text !=='') alt="{{$blog->image_alt}}"@endif @if($blog->title !== '')title="{{$blog->image_title}}"@endif/></div>
                                    @else
                                    @endif
                                        <h2>{{$blog->title}}</h2>
                                        @if($blog->sub_title != '')<h3><p><i>{{$blog->sub_title}}</i></p></h3>@endif
                                        @if($blog->body !== ''){{$blog->body}} @endif
                                        <p><a class="btn btn-primary readmore" href="{{url('blog-detail'.'/'.$blog->id)}}">Read More <i class="fa fa-angle-right"></i></a></p>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                       <hr style="width:100%"/>
                    @endforeach
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->


@stop