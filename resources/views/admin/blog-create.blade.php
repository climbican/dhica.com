@extends('layouts.app-admin')

@section('content')
    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>New Blog</h2>
                <p>Title, description, image, creator / author and tags that can be built by field below will be generated automatically.</p>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card">
                <form name="create_blog" method="post" action="{{url('')}}/admin/blog/save" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="card-body card-padding">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="fileinput fileinput-new" data-provides="fileinput" style="margin:0px auto 25px auto;">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                    <div>
                                        <span class="btn btn-info btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="blogImage" ng-model="blogImage" id="blogImage">
                                        </span>
                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_blog.authorName.$invalid && !create_blog.authorName.$pristine) || create_blog.authorName.$touched && create_blog.authorName.$invalid}">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" name="authorName" ng-model="authorName" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" required>
                                        <label class="fg-label">Author Name</label>
                                    </div>
                                    <div ng-messages="create_blog.authorName.$error" ng-show="create_blog.authorName.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                        <small class="help-block" ng-message="required">This field is requred</small>
                                    </div>
                                </div>
                                <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_blog.title.$invalid && !create_blog.title.$pristine) || create_blog.title.$touched && create_blog.title.$invalid}">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" name="title" ng-minlength="6" ng-maxlength="75" ng-model="title" required>
                                        <label class="fg-label">Title</label>
                                    </div>
                                    <div ng-messages="create_blog.title.$error" ng-show="create_blog.title.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 75 characters</small>
                                    </div>
                                </div>
                                <div class="form-group fg-float m-b-30" ng-class="{ 'has-error' : (create_blog.subTitle.$invalid && !create_blog.subTitle.$pristine) || create_blog.subTitle.$touched && create_blog.subTitle.$invalid}">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" name="subTitle" ng-model="subTitle" ng-minlength="6" ng-maxlength="50">
                                        <label class="fg-label">Sub Title</label>
                                    </div>
                                    <div ng-messages="create_blog.subTitle.$error" ng-show="create_blog.subTitle.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error' : (create_blog.bodyText.$invalid && !create_blog.bodyText.$pristine) || create_blog.bodyText.$touched && create_blog.bodyText.$invalid}" style="margin-bottom:25px;">
                            <div class="fg-line">
                                <textarea class="form-control" data-auto-size placeholder="Add blog body text here..." name="bodyText" ng-model="bodyText" ng-minlength="50" ng-maxlength="2000"></textarea>
                            </div>
                            <div ng-messages="create_blog.bodyText.$error" ng-show="create_blog.bodyText.$dirty">
                                <small class="help-block" ng-message="minlength">This too short min 50 characters</small>
                                <small class="help-block" ng-message="maxlength">Sorry we can only take 2000 characters</small>
                            </div>
                        </div>
                        <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_blog.mediaLink.$invalid && !create_blog.mediaLink.$pristine) || create_blog.mediaLink.$touched && create_blog.mediaLink.$invalid}">
                            <div class="fg-line">
                                <input type="text" class="form-control fg-input" name="mediaLink" ng-model="mediaLink" ng-minlength="10" ng-maxlength="250"/>
                                <label class="fg-label">External Media Link (YouTube, Vimeo, etc)</label>
                            </div>
                            <div ng-messages="create_blog.mediaLink.$error" ng-show="create_blog.mediaLink.$dirty">
                                <small class="help-block" ng-message="minlength">This too short</small>
                                <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-sm-12">
                                <div class="form-group fg-float m-b-30">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" ng-minlength="5" ng-maxlength="50" name="metaDescription" id="metaDescription">
                                        <label class="fg-label">Meta Description</label>
                                    </div>
                                    <div ng-messages="create_blog.metaDescription.$error" ng-show="create_blog.metaDescription.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_blog.imageAlt.$invalid && !create_blog.imageAlt.$pristine) || create_blog.imageAlt.$touched && create_blog.imageAlt.$invalid}">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" name="imageAlt" ng-model="imageAlt" ng-minlength="5" ng-maxlength="50">
                                        <label class="fg-label">Image Alt</label>
                                    </div>
                                    <div ng-messages="create_blog.imageAlt.$error" ng-show="create_blog.imageAlt.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short min 5 characters</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group fg-float m-b-30 fg-toggled" ng-class="{ 'has-error' : (create_blog.imageTitle.$invalid && !create_blog.imageTitle.$pristine) || create_blog.imageTitle.$touched && create_blog.imageTitle.$invalid}">
                                    <div class="fg-line">
                                        <input type="text" class="form-control fg-input" name="imageTitle" ng-model="imageTitle" ng-minlength="5" ng-maxlength="50">
                                        <label class="fg-label">Image Title</label>
                                    </div>
                                    <div ng-messages="create_blog.authorName.$error" ng-show="create_blog.authorName.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short min. 5 characters</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="create_blog.$invalid || !create_blog.$dirty">Add Blog</button>
                            </div>
                        </div>
                    </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection