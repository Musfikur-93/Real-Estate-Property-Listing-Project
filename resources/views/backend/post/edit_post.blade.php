@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">    
        <div class="row profile-body">
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
              <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add Post </h6>
                    <form class="forms-sample" method="POST" action="{{ route('update.post') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <input type="hidden" name="old_img" value="{{ $post->post_image }}">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Post Title </label>
                                    <input type="text" name="post_title" class="form-control" value="{{ $post->post_title }}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Blog Category </label>
                                    <select class="form-select" name="blogcat_id" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Select Category </option>
                                        @foreach($blogpost as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $post->blogcat_id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- Col -->
                          </div>

                          <div class="col-sm-12">
                              <div class="mb-3">
                                  <label class="form-label">Short Description</label>
                                  <textarea class="form-control" name="short_descp" id="exampleFormControlTextarea1" rows="3">{{ $post->short_descp }}</textarea>
                              </div>
                          </div><!-- Col -->

                          <div class="col-sm-12">
                              <div class="mb-3">
                                  <label class="form-label">Long Description</label>
                                  <textarea class="form-control" name="long_descp" id="tinymceExample" rows="10">{!! $post->long_descp !!}</textarea>
                              </div>
                          </div><!-- Col -->

                          <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Post Tags </label>
                                <input name="post_tags" id="tags" value="{{ $post->post_tags }}" />
                            </div>
                        </div><!-- Col -->

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Post Photo</label>
                          <input class="form-control" type="file" name="post_image" id="image">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> </label>
                            <img id="showImage" class="wd-80 rounded-circle" src="{{ asset($post->post_image) }}" alt="profile">
                        </div>
                        
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                    </form>
                    </div>
                </div>
            </div>
          </div>
          <!-- middle wrapper end -->
        </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
        });
      });
    </script>

@endsection