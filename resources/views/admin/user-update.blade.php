@extends('layouts.app-admin')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>Update User Form</h2>
                <p>Name of person, password and confirm password.</p>
            </div>
            <div class="card">
                <form name="create_user" method="post" action="{{url('')}}/admin/user/update/{{$user->id}}">
                    {!! csrf_field() !!}
                    <div class="card-body card-padding">
                        <div class="form-group fg-line" ng-class="{ 'has-error' : (create_user.userName.$invalid && !create_user.userName.$pristine) || create_user.userName.$touched && create_user.userName.$invalid}">
                            <label class="fg-label">User Name</label>
                            <input type="text" class="form-control fg-input" name="userName" ng-model="userName" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" ng-init="userName='{{$user->name}}'" required>
                        </div>
                        <div class="form-group fg-line" ng-class="{ 'has-error' : (create_user.email.$invalid && !create_user.email.$pristine) || create_user.email.$touched && create_user.email.$invalid}">
                            <label class="fg-label">Email</label>
                            <input type="email" class="form-control fg-input" name="email" ng-model="email" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" ng-init="email='{{$user->email}}'" required>

                        </div>
                        <!--this is where I need to look up the session -->
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_user.password.$invalid && !create_user.password.$pristine) || create_user.password.$touched && create_user.password.$invalid}">
                            <label class="fg-label">Password</label>
                            <input type="password" class="form-control fg-input" name="password" ng-model="password" ng-minlength="6" ng-maxlength="16"  required>
                        </div>
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_user.confirmPassword.$invalid && !create_user.confirmPassword.$pristine) || create_user.confirmPassword.$touched && create_user.confirmPassword.$invalid}">
                            <label class="fg-label">Confirm Password</label>
                            <input type="password" class="form-control fg-input" name="confirmPassword" ng-model="confirm_password" ng-minlength="6" ng-maxlength="16"  required>
                        </div>
                        <!-- <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_user.mediaLink.$invalid && !create_user.mediaLink.$pristine) || create_user.mediaLink.$touched && create_user.mediaLink.$invalid}">
                             <div class="fg-line">
                                 <input type="text" class="form-control fg-input" name="mediaLink" ng-model="mediaLink" ng-minlength="10" ng-maxlength="250"/>
                                 <label class="fg-label">Media Link</label>
                             </div>
                         </div>-->
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="create_user.$invalid || !create_user.$dirty">Update User</button>
                            </div>
                        </div>
                    </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection