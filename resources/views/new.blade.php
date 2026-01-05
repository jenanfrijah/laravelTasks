@extends('layout.master')
@section('title',"New Page")

@section('css')
@endsection

@section('content')
  <h1 class="mt-4">New Page</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">New Page</li>
    </ol>
    
    <!-- Main Content Card -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-file me-1"></i>
            Page Title
        </div>
        <div class="card-body">
            <p>Your content goes here...</p>
            
            <!-- the content here-->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Replace this with your actual content -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection