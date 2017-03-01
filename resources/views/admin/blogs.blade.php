@extends('layouts.app-admin')

@section('content')

    <section id="main">
        <section id="content">
            <div class="container c-alt">
                <div class="card">
                    <div class="listview lv-bordered lv-lg">
                        <div class="lv-header-alt clearfix">
                            <h2 class="lvh-label hidden-xs">Blog List</h2>
                            <ul class="lv-actions actions">
                                <li class="dropdown" uib-dropdown>
                                    <a href="" uib-dropdown-toggle aria-expanded="true">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="{{url('')}}/admin/blog/create">Create New Blog</a>
                                        </li>
                                        <li><a href="{{url('')}}/admin/blog/list">List All</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="lv-body">
                            <!--repeater section-->
                            @foreach ($blogs as $blog)
                            <div class="lv-item media">
                                <div class="media-body">
                                    <div class="lv-title">Title:  {{$blog->title}}</div>
                                    <ul class="lv-attrs">
                                        <li style="width: 190px;">Author:  {{$blog->author_name}}</li>
                                        <li>Date Created: {{date('Y/m/d',substr($blog->create_dte,0,10) )}}</li>
                                        <li>Last Update: {{date('Y/m/d', substr($blog->last_update,0,10) )}}</li>
                                    </ul>
                                    <div class="lv-actions actions dropdown" uib-dropdown>
                                        <a href="" uib-dropdown-toggle aria-expanded="true">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="{{url('')}}/admin/blog/update/{{$blog->id}}">Edit</a>
                                            </li>
                                            <li>
                                                <a href="{{url('')}}/admin/blog/delete/{{$blog->id}}">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <footer id="footer" data-ng-include src="'{{url('')}}/template/footer.html'"></footer>

@endsection