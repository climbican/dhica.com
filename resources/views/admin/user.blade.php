@extends('layouts.app-admin')

@section('content')

    <section id="main">
        <section id="content">
            <div class="container c-alt">
                <div class="card">
                    <div class="listview lv-bordered lv-lg">
                        <div class="lv-header-alt clearfix">
                            <h2 class="lvh-label hidden-xs">User List</h2>
                            <ul class="lv-actions actions">
                                <li class="dropdown" uib-dropdown>
                                    <a href="" uib-dropdown-toggle aria-expanded="true">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <!-- this will also need the session variable for session -->
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="{{url('')}}/admin/user/create">Create New User</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="lv-body">
                            <!--repeater section-->
                            @foreach ($users as $user)
                                <div class="lv-item media">
                                    <div class="media-body">
                                        <div class="lv-title">User Name:  {{$user->name}}</div>
                                        <ul class="lv-attrs">
                                            <li>Email: {{$user->email}}</li>
                                            <li>Date Created: hold</li>
                                            <li>Last Update: </li>
                                        </ul>
                                        <div class="lv-actions actions dropdown" uib-dropdown>
                                            <a href="" uib-dropdown-toggle aria-expanded="true">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="{{url('')}}/admin/user/update/{{$user->id}}">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('')}}/admin/user/delete/{{$user->id}}">Delete</a>
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