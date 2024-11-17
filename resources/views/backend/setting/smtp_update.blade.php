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
					<h6 class="card-title">Update Smtp Setting</h6>
					<form id="myForm" class="forms-sample" method="POST" action="{{ route('update.smtp.setting') }}">
            			@csrf
						
                        <input type="hidden" name="id" value="{{ $setting->id }}">

        				<div class="form-group mb-3">
        					<label for="exampleInputEmail1" class="form-label">Mailer</label>
        					<input type="text" class="form-control" name="mailer" value="{{ $setting->mailer }}">
        				</div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Host</label>
                            <input type="text" class="form-control" name="host" value="{{ $setting->host }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Port</label>
                            <input type="text" class="form-control" name="post" value="{{ $setting->post }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $setting->username }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" value="{{ $setting->password }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">Encryption</label>
                            <input type="text" class="form-control" name="encryption" value="{{ $setting->encryption }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1" class="form-label">From Address</label>
                            <input type="text" class="form-control" name="from_address" value="{{ $setting->from_address }}">
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


@endsection