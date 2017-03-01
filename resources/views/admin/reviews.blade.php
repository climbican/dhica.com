@extends('layouts.app-admin')
<!-- need to seperate out where we have sent a review to a customer -->
@section('content')
    <section id="main">
        <section id="content">
            <div class="container c-alt">
                <div class="card">
                    <div class="listview lv-bordered lv-lg">
                        <div class="lv-header-alt clearfix">
                            <h2 class="lvh-label hidden-xs">Review List</h2>
                            <ul class="lv-actions actions">
                                <li class="dropdown" uib-dropdown>
                                    <a href="" uib-dropdown-toggle aria-expanded="true">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="{{url('admin/review/create')}}">Add New review</a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/review/list')}}">List All</a>
                                        </li>
                                        <li>
                                            <a href="{{url('admin/customer/review')}}">Send Customer Review Invite</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="lv-body">
                            <!--repeater section-->
                            @foreach ($reviews as $review)
                                <div class="lv-item media" @if($review->sent_on !== null) style="{{$custBack}}" @endif>
                                    <div class="media-body">
                                        <div class="lv-title">
                                            @if($review->sent_on == null)Reviewer Name:@else <span>Sent To:</span>@endif  {{$review->reviewer_name}}</div>
                                        <ul class="lv-attrs">
                                            <li style="width: 350px;">Short:  {{substr($review->body_text, 0,100)}}</li>
                                            @if($review->sent_on == null)
                                                <li>Date Created: {{date('Y/m/d',substr($review->create_dte,0,10) )}}</li>
                                                <li>Last Update: {{date('Y/m/d', substr($review->last_update,0,10) )}}</li>
                                            @else
                                                <li>Sent On: {{date('Y/m/d', substr($review->sent_on, 0,10))}}</li>
                                            @endif
                                            @if($review->approved_on !== null && $review->sent_on !== null)
                                                <li>Approved On: {{date('Y/m/d', substr($review->approved_on,0,10))}}</li>
                                            @endif
                                        </ul>
                                        <div class="lv-actions actions dropdown" uib-dropdown>
                                            <a href="" uib-dropdown-toggle aria-expanded="true">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                @if($review->approved_on == null && $review->token == null && $review->sent_on !== null)
                                                    <li><a href="{!! url('admin/review/update'.'/'.$review->id) !!}">View and Approve</a></li>
                                                @else
                                                    <a href="{{url('admin/review/update/'.$review->id)}}">Edit</a>
                                                @endif
                                                </li>
                                                <li>
                                                    <a href="{{url('admin/review/delete/'.$review->id)}}">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @if($numRows > 0)
                                <div class="text-center">{{$reviews->links()}}  &nbsp; <span style="margin-left:4%; padding-top:20px;">Total {{$numRows}}</span></div>
                            @endif
                            @if($numRows < 1)
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h3>You have no reviews yet</h3>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer id="footer" data-ng-include src="'{{url('')}}/template/footer.html'"></footer>

@endsection