@extends('agent.agent_dashboard')
@section('agent')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Schedule Details</a></li>
			<li class="breadcrumb-item active" aria-current="page">Schedule</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12">
        <div class="card">
          <h6 class="card-title pt-3">Schedule Request Details </h6>
          <form method="post" action="{{ route('agent.update.schedule') }}">
            @csrf

            <input type="hidden" name="id" value="{{ $schedule->id }}">
            <input type="hidden" name="email" value="{{ $schedule->user->email }}">

               <div class="table-responsive pt-3">
                  <table class="table table-bordered">
                    <tbody>

                        <tr>
                          <td>User Name </td>
                          <td>{{ $schedule->user->name }}</td>
                        </tr>

                        <tr>
                          <td>Property Name </td>
                          <td>{{ $schedule->property->property_name }}</td>

                        </tr>
                        <tr>
                          <td>Tour Date  </td>
                          <td>{{ date('d-M-Y', strtotime($schedule->tour_date)) }}</td>
                        </tr>

                        <tr>
                          <td>Tour Time  </td>
                          <td>{{ $schedule->tour_time }}</td>
                        </tr>

                        <tr>
                          <td>Message  </td>
                          <td>{{ $schedule->message }}</td>
                        </tr>

                        <tr>
                          <td>Request Send Time  </td>
                          <td>{{ $schedule->created_at->format('l M d Y') }}</td>
                        </tr>

                    </tbody>
                  </table>
                </div>
                <br><br>
                @if($schedule->status == '1')
                  <span class="text-danger">Already Schedule Request Confirm</span>
                   <br><br>
                @else
                  <button type="submit" class="btn btn-success">Request Confirm </button>
                  <br><br>
                @endif
           
       </form>
      </div>
	</div>
</div>
</div>




@endsection