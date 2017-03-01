@extends('layouts.app-admin')
@section('content')

    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>New Review</h2>
                <p>Name of person, Stars given, letter body.  The date will be set automatically.</p>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger" style="color:greenyellow;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <form name="create_review" method="post" action="{{url('admin/review/save')}}">
                    {!! csrf_field() !!}
                    <div class="card-body card-padding">
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_review.reviewerName.$invalid && !create_review.reviewerName.$pristine) || create_review.reviewerName.$touched && create_review.reviewerName.$invalid}">
                            <div class="fg-line">
                                <input type="text" class="form-control fg-input" name="reviewerName" ng-model="reviewerName" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" required>
                                <label class="fg-label">Reviewer Name</label>
                            </div>
                        </div>
                       <!-- <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_review.mediaLink.$invalid && !create_review.mediaLink.$pristine) || create_review.mediaLink.$touched && create_review.mediaLink.$invalid}">
                            <div class="fg-line">
                                <input type="text" class="form-control fg-input" name="mediaLink" ng-model="mediaLink" ng-minlength="10" ng-maxlength="250"/>
                                <label class="fg-label">Media Link</label>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="fg-line">
                                <p class="c-black f-500 m-b-20">Star Rating</p>
                                <div class="select">
                                    <select class="form-control" name="stars" ng-model="stars">
                                        <option value="5">5</option>
                                        <option>4</option>
                                        <option>3</option>
                                        <option>2</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : (create_review.bodyText.$invalid && !create_review.bodyText.$pristine) || create_review.bodyText.$touched && create_review.bodyText.$invalid}">
                            <div class="fg-line">
                                <textarea class="form-control" data-auto-size placeholder="Add review body text here..." name="bodyText" ng-model="bodyText" ng-minlength="100" ng-maxlength="2000" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="create_review.$invalid || !create_review.$dirty">Add Customer Review</button>
                            </div>
                        </div>
                    </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection