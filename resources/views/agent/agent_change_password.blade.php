@extends('agent.agent_dashboard')
@section('agent')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">    
        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/agent_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="agent profile">
                    <span class="h4 ms-3 text-light">{{ $profileData->name }}</span>
                  </div>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                  <p class="text-muted">{{ $profileData->username }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{ $profileData->email }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{ $profileData->phone }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                  <p class="text-muted">{{ $profileData->address }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
              <div class="card">
              	<div class="card-body">
					<h6 class="card-title">Change Password</h6>
					<form class="forms-sample" method="POST" action="{{ route('agent.update.password') }}" enctype="multipart/form-data">
            @csrf
						
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Old Password</label>
							<input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="old_password" autocomplete="off">
              @error('old_password')
                <span class="text-danger">{{ $message }}</span>
              @enderror
						</div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">New Password</label>
              <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" autocomplete="off">
              @error('new_password')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" autocomplete="off">
            </div>
						
						<button type="submit" class="btn btn-primary me-2">Save Changes</button>
						<button class="btn btn-secondary">Cancel</button>
					</form>
              		</div>
            	</div>
            </div>
          </div>
          <!-- middle wrapper end -->
        </div>
	</div>



@endsection