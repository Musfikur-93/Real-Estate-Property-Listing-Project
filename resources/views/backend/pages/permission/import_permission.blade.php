@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
<!--         <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('export') }}" class="btn btn-inverse-danger"> Download Xlsx </a>
            </ol>
        </nav> -->    
        <div class="row profile-body">
          <!-- middle wrapper start -->
          <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
              <div class="card">
              	<div class="card-body">
					<h6 class="card-title">Import Permission</h6>
					<form id="myForm" class="forms-sample" method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
            			@csrf
						
				<div class="form-group mb-3">
					<label for="exampleInputEmail1" class="form-label">Xlsx File Import</label>
					<input type="file" class="form-control" name="import_file">
				</div>

	
						<button type="submit" class="btn btn-inverse-warning">Upload </button>
					</form>
              		</div>
            	</div>
            </div>
          </div>
          <!-- middle wrapper end -->
        </div>
	</div>


@endsection