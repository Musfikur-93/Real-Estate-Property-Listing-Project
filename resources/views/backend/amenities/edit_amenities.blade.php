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
					<h6 class="card-title">Edit Amenities</h6>
					<form id="myForm" class="forms-sample" method="POST" action="{{ route('update.amenities') }}">
            			@csrf

                    <input type="hidden" name="id" value="{{ $amenities->id }}">
						
				<div class="form-group mb-3">
					<label for="exampleInputEmail1" class="form-label">Amenities Name</label>
					<input type="text" class="form-control" name="amenities_name" value="{{ $amenities->amenities_name }}">
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenities_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenities_name: {
                    required : 'Please Enter Amenities Name',
                },   

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection