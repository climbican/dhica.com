@extends('layouts.app')
@section('content')

    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="center">
                <h2 id="recentWorksTitle">Customer Review</h2>
                <p class="lead" id="recentWorksBodyText">In a few words let us know about your experience with Distinctive Home Improvements.</p>
            </div>
            <form name="create_review" method="post" action="{{url('customer/review/save/'.$token)}}">
                {!! csrf_field() !!}
                <div class="card-body card-padding">
                    <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_review.reviewerName.$invalid && !create_review.reviewerName.$pristine) || create_review.reviewerName.$touched && create_review.reviewerName.$invalid}">
                        <div class="fg-line">
                            <input type="text" class="form-control fg-input" name="reviewerName" ng-model="reviewerName" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" value="{{$name}}"  required>
                            <label class="fg-label">Reviewer Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fg-line">
                            <p class="c-black f-500 m-b-20">Star Rating</p>
                            <div class="select">
                                <select class="form-control" name="stars" ng-model="stars" autofocus>
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
                            <textarea class="form-control" data-auto-size placeholder="Add review body text here..." rows="6" name="bodyText" ng-model="bodyText" ng-minlength="50" ng-maxlength="2000" required></textarea>
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
    </section>

@endsection