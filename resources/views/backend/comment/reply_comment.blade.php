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
                    <h6 class="card-title">Reply Comment </h6>
                    <form class="forms-sample" method="POST" action="{{ route('reply.message') }}">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{ $comment->id }}">
                        <input type="hidden" name="user_id" value="{{ $comment->user_id }}">
                        <input type="hidden" name="post_id" value="{{ $comment->post_id }}">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name : </label>
                            <code>{{ $comment['user']['name'] }} </code>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Post Title : </label>
                            <code>{{ $comment['post']['post_title'] }} </code>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject : </label>
                            <code>{{ $comment->subject }} </code>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message : </label>
                            <code>{{ $comment->message }} </code>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <input type="text" class="form-control" name="message">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Reply Comment</button>
                    </form>
                    </div>
                </div>
            </div>
          </div>
          <!-- middle wrapper end -->
        </div>
    </div>

    
@endsection