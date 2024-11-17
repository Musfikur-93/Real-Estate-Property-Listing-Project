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
					<h6 class="card-title">Update Site Setting</h6>
					<form id="myForm" class="forms-sample" method="POST" action="{{ route('update.site.setting') }}" enctype="multipart/form-data">
                        
            			@csrf
						
                        <input type="hidden" name="id" value="{{ $sitesetting->id }}">
                        <input type="hidden" name="old_img" value="{{ $sitesetting->logo }}">

        				<div class="form-group mb-3">
        					<label for="exampleInputEmail1" class="form-label">Company Address</label>
        					<input type="text" class="form-control" name="company_address" value="{{ $sitesetting->company_address }}">
        				</div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Company Phone</label>
                            <input type="text" class="form-control" name="company_phone" value="{{ $sitesetting->company_phone }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Company Email</label>
                            <input type="text" class="form-control" name="company_email" value="{{ $sitesetting->company_email }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Office Hour</label>
                            <input type="text" class="form-control" name="office_hour" value="{{ $sitesetting->office_hour }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">About Us</label>
                            <textarea class="form-control" name="about_us" id="tinymceExample" rows="10">{{ $sitesetting->about_us }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ $sitesetting->facebook }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter" value="{{ $sitesetting->twitter }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ $sitesetting->linkedin }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Copyright</label>
                            <input type="text" class="form-control" name="copyright" value="{{ $sitesetting->copyright }}">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Logo</label>
                          <input class="form-control" type="file" name="logo" id="image">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label"></label>
                          <img class="wd-80" id="showImage" src="{{ asset($sitesetting->logo) }}" alt="">
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