@extends('layouts.app-admin')
@section('content')
    <section id="main">
        <div class="container">
            <div class="block-header">
                <h2>New Blog</h2>
                <p>Title, description, image, creator / author and tags that can be built by field below will be generated automatically.</p>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <form method="post" name="update_blog" action="{{url('admin/blog/update'.'/'.$blog->id)}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput" style="margin:0px auto 25px auto;">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"><img src="{{url('images/blog/'.$blog->image_url)}}" style="margin-top:1px;"/></div>
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
                                    <div class="form-group" ng-class="{ 'has-error' : (update_blog.authorName.$invalid && !update_blog.authorName.$pristine) || update_blog.authorName.$touched && update_blog.authorName.$invalid}">
                                        <div class="fg-line">
                                            <label for="authorName">Author Name</label>
                                            <input type="text" class="form-control input-sm" name="authorName" ng-model="authorName" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" ng-init="authorName='{{ $blog->author_name }}'"  required/>
                                        </div>
                                        <div ng-messages="update_blog.authorName.$error" ng-show="update_blog.authorName.$dirty">
                                            <small class="help-block" ng-message="minlength">This too short</small>
                                            <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                            <small class="help-block" ng-message="required">This field is requred</small>
                                        </div>
                                    </div>
                                    <div class="form-group" ng-class="{ 'has-error' : (update_blog.title.$invalid && !update_blog.title.$pristine) || update_blog.title.$touched && update_blog.title.$invalid}">
                                        <div class="form-group fg-line">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control fg-input" name="title" ng-minlength="10" ng-maxlength="75" ng-model="title" ng-init="title='{{ $blog->title }}'" required>
                                        </div>
                                        <div ng-messages="update_blog.title.$error" ng-show="update_blog.title.$dirty">
                                            <small class="help-block" ng-message="minlength">This too short</small>
                                            <small class="help-block" ng-message="maxlength">Sorry we can only take 75 characters</small>
                                        </div>
                                    </div>
                                    <div class="form-group" ng-class="{ 'has-error' : (update_blog.subTitle.$invalid && !update_blog.subTitle.$pristine) || update_blog.subTitle.$touched && update_blog.subTitle.$invalid}">
                                        <div class="form-group fg-line">
                                            <label class="fg-label">Sub Title</label>
                                            <input type="text" class="form-control fg-input" name="subTitle" ng-model="subTitle" ng-minlength="7" ng-maxlength="50" ng-init="subTitle='{{ $blog->sub_title }}'" required>
                                        </div>
                                        <div ng-messages="update_blog.subTitle.$error" ng-show="update_blog.subTitle.$dirty">
                                            <small class="help-block" ng-message="minlength">This too short</small>
                                            <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" ng-class="{ 'has-error' : (update_blog.bodyText.$invalid && !update_blog.bodyText.$pristine) || update_blog.bodyText.$touched && update_blog.bodyText.$invalid}">
                                <div class="fg-line">
                                    <textarea class="form-control" data-auto-size placeholder="Add blog body text here..." name="bodyText" ng-model="bodyText" ng-minlength="100" ng-maxlength="2000" ng-init="bodyText='{{ $blog->body }}'" required></textarea>
                                </div>
                                <div ng-messages="update_blog.bodyText.$error" ng-show="update_blog.bodyText.$dirty">
                                    <small class="help-block" ng-message="minlength">This too short min 50 characters</small>
                                    <small class="help-block" ng-message="maxlength">Sorry we can only take 2000 characters</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group fg-line" ng-class="{ 'has-error' : (update_blog.mediaLink.$invalid && !update_blog.mediaLink.$pristine) || update_blog.mediaLink.$touched && update_blog.mediaLink.$invalid}">
                                        <label for="mediaLink">Media Link</label>
                                        <input type="text" class="form-control input-sm" name="mediaLink" ng-model="mediaLink" ng-minlength="7" ng-maxlength="50" ng-pattern="/^(\D)+$/" ng-init="mediaLink='{{ $blog->media_link }}'">
                                    </div>
                                    <div ng-messages="update_blog.mediaLink.$error" ng-show="update_blog.mediaLink.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                                <div class="col-sm-12 form-group" ng-class="{ 'has-error' : (update_blog.metaDescription.$invalid && !update_blog.metaDescription.$pristine) || update_blog.metaDescription.$touched && update_blog.metaDescription.$invalid}">
                                    <div class="fg-line">
                                        <label for="metaDescription">Meta Description</label>
                                        <input type="text" class="form-control fg-input" name="metaDescription" ng-model="metaDescription" ng-minlength="3" ng-maxlength="150" ng-init="metaDescription='{{ $blog->meta_descript }}'">
                                    </div>
                                    <div ng-messages="update_blog.metaDescription.$error" ng-show="update_blog.metaDescription.$dirty">
                                        <small class="help-block" ng-message="minlength">This too short</small>
                                        <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group m-b-30" ng-class="{ 'has-error' : (update_blog.imageAlt.$invalid && !update_blog.imageAlt.$pristine) || update_blog.imageAlt.$touched && update_blog.imageAlt.$invalid}">
                                        <div class="fg-line">
                                            <label for="imageAlt" class="fg-label">Image Alt</label>
                                            <input type="text" class="form-control fg-input" name="imageAlt" ng-model="imageAlt" ng-minlength="5" ng-maxlength="50" ng-init="imageAlt='{{ $blog->image_alt_text }}'">
                                        </div>
                                        <div ng-messages="update_blog.imageAlt.$error" ng-show="update_blog.imageAlt.$dirty">
                                            <small class="help-block" ng-message="minlength">This too short min 5 characters</small>
                                            <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group" ng-class="{ 'has-error' : (update_blog.imageTitle.$invalid && !update_blog.imageTitle.$pristine) || update_blog.imageTitle.$touched && update_blog.imageTitle.$invalid}">
                                        <div class="fg-line">
                                            <label for="imageTitle" class="fg-label">Image Title</label>
                                            <input type="text" class="form-control fg-input" name="imageTitle" ng-model="imageTitle" ng-minlength="5" ng-maxlength="50" ng-init="imageTitle='{{ $blog->image_title }}'">
                                        </div>
                                        <div ng-messages="update_blog.imageTitle.$error" ng-show="update_blog.imageTitle.$dirty">
                                            <small class="help-block" ng-message="minlength">This too short min. 5 characters</small>
                                            <small class="help-block" ng-message="maxlength">Sorry we can only take 50 characters</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-sm m-t-5" ng-disabled="update_blog.$invalid || !update_blog.$dirty">Update Blog</button>
                                </div>
                            </div>
                        </div><!--end card body -->
                </form>
            </div>
        </div>
    </section>
@endsection