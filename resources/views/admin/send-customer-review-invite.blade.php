@extends('layouts.app-admin')
@section('content')
    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>Customer Review Request</h2>
                <p>Send an email to a customer you want to write a review for the sites.</p>
            </div>
            <div class="card">
                <form name="customer_review_invite" method="post" action="{{url('admin/send/customer/invite')}}">
                    {!! csrf_field() !!}
                    <div class="card-body card-padding">
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (customer_review_invite.custName.$invalid && !customer_review_invite.custName.$pristine) || customer_review_invite.custName.$touched && customer_review_invite.custName.$invalid}">
                            <div class="fg-line">
                                <input type="text" class="form-control fg-input" name="custName" ng-model="custName" ng-minlength="3" ng-maxlength="50" required>
                                <label class="fg-label">Customer Name</label>
                            </div>
                            <div class="has-error" ng-messages="customer_review_invite.custName.$error" ng-show="customer_review_invite.custName.$dirty">
                                <small class="help-block" ng-message="minlength">Please add at least 3 characters for a name</small>
                                <small class="help-block" ng-message="maxlength">Sorry we can only take 35 characters</small>
                                <small class="help-block" ng-message="required">This field is required</small>
                            </div>
                        </div>
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (customer_review_invite.custEmail.$invalid && !customer_review_invite.custEmail.$pristine) || customer_review_invite.custEmail.$touched && customer_review_invite.custEmail.$invalid}">
                            <div class="fg-line">
                                <input type="email" class="form-control fg-input" name="custEmail" ng-model="custEmail" ng-minlength="8" ng-maxlength="75" required>
                                <label class="fg-label">Email</label>
                            </div>
                            <div class="has-error" ng-messages="customer_review_invite.custEmail.$error" ng-show="customer_review_invite.custEmail.$dirty">
                                <small class="help-block" ng-message="minlength">Please add at least 8 characters for email address</small>
                                <small class="help-block" ng-message="maxlength">Sorry we can only take 75 characters</small>
                                <small class="help-block" ng-message="required">Please enter a valid email address</small>
                            </div>
                        </div>
                        <!-- personalized message -->
                        <div class="form-group" ng-class="{ 'has-error' : (customer_review_invite.custMessage.$invalid && !customer_review_invite.custMessage.$pristine) || customer_review_invite.custMessage.$touched && customer_review_invite.custMessage.$invalid}">
                            <div class="fg-line">
                                <textarea class="form-control" data-auto-size placeholder="Add message to customer here..." id="custMessage" name="custMessage" ng-model="custMessage" ng-minlength="20" ng-maxlength="1250"></textarea>
                            </div>
                            <div class="has-error" ng-messages="customer_review_invite.custMessage.$error" ng-show="customer_review_invite.custMessage.$dirty">
                                <small class="help-block" ng-message="minlength">Please add at least 20 characters to the message</small>
                                <small class="help-block" ng-message="maxlength">Sorry we can only take 1250 characters</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="customer_review_invite.$invalid || !customer_review_invite.$dirty">Send Customer Review Invite</button>
                            </div>
                        </div>
                    </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection