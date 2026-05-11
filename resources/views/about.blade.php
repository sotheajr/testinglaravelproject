@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 mb-4">About Our Application</h1>
            <p class="lead">
                Welcome to our platform. We are dedicated to providing the best service 
                possible using modern technology and user-centric design.
            </p>
            <hr class="my-5">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>
                To streamline workflows and enhance productivity through 
                efficient server-side rendering and elegant code.
            </p>
        </div>
        <div class="col-md-6">
            <h3>Our Vision</h3>
            <p>
                To be the leading solution in our industry, powered by the 
                robust capabilities of the Laravel framework.
            </p>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
    </div>
</div>
@endsection