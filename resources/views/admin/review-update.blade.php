@extends('layouts.app-admin')
@section('content')
    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>Update Review</h2>
                <p>Name of person, Stars given, letter body.  The date will be set automatically. </p>
            </div>
            <div class="card">
                <form method="post" name="update_review" action="{{url('')}}/admin/review/update/{{ $review->id }}">
                    <div class="card-body card-padding">
                        <div class="form-group m-b-30 fg-toggled" ng-class="{ 'has-error' : (update_review.reviewerName.$invalid && !update_review.authorName.$pristine) || update_review.authorName.$touched && update_review.authorName.$invalid}">
                            <div class="fg-line">
                                <label class="fg-label">Reviewer Name</label>
                                <input type="text" class="form-control fg-input" name="reviewerName" ng-model="reviewerName" ng-init="reviewerName='{{ $review->reviewer_name }}'" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" required>
                            </div>
                        </div>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <div class="fg-line">
                                <p class="c-black f-500 m-b-20">Star Rating</p>
                                <div class="select">
                                    <select class="form-control" name="stars" data-ng-model="stars" ng-init="stars='{{ $review->stars }}'">
                                        <option>5</option>
                                        <option>4</option>
                                        <option>3</option>
                                        <option>2</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : (update_review.bodyText.$invalid && !update_review.bodyText.$pristine) || update_review.bodyText.$touched && update_review.bodyText.$invalid}">
                            <div class="fg-line">
                                <textarea class="form-control" data-auto-size placeholder="Add review body text here..." name="bodyText" ng-model="bodyText" ng-minlength="100" ng-maxlength="2000" rows="5" ng-init="bodyText='{{ $review->body_text }}'" required></textarea>
                            </div>
                        </div>
                        @if($review->sent_on !== null)
                            <div class="checkbox m-b-15">
                                <label>
                                    <input type="checkbox" value="" name="approved" data-ng-model="approved" ng-checked="'{{$review->approved_on }}'">
                                    <i class="input-helper"></i>
                                    This article is approved for the site
                                </label>
                            </div>

                        @endif
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="update_review.$invalid">Update Customer Review</button>
                            </div>
                        </div>
                    </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection