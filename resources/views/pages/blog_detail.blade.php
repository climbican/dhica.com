@extends('layouts.app')
@section('content')
    <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                    <div class="blog-item">
                        @if($blog->title !== '')
                        <div class="row">
                            <div class="col-sm text-center">
                                <h2>{{$blog->title}}</h2>
                                <h3>@if($blog->sub_title != '')<p><i>{{$blog->sub_title}}</i>@endif
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div style="margin-left:auto; margin-right:auto; max-width:800px;">
                                @if($blog->media_link  !== '')
                                    <div col-sm-6 class="responsive-video"><iframe width="420" height="315" src="{{$blog->media_link}}" frameborder="0" allowfullscreen></iframe></div>
                                @endif
                                @if($blog->image_url !== '')
                                    <div class="col-sm-12">
                                        <img style="width:420px; margin-bottom:10px;" src="{{url('images/blog').'/'.$blog->image_url}}" @if($blog->image_alt_text !=='') alt="{{$blog->image_alt}}"@endif @if($blog->title !== '')title="{{$blog->image_title}}"@endif/>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if($blog->body !== '')
                        <div class="row">
                            <div class="col-sm-12 text-left">
                                <div>
                                    <h3>{{$blog->body}}</h3>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#">{{$blog->author_name}}</a></span>
                                    <span id="publish_date"> {{date('d M',substr($blog->last_update,0,10) )}}</span>
                                </div>
                            </div>
                        </div>
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@endsection