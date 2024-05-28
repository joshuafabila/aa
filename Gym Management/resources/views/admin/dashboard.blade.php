@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="jumbotron mt-4">
            <h2 class="text-center">Manage Your Gym Efficiently</h2>
            <p class="lead text-center">Explore and manage various aspects of your gym operations.</p>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMG97JR-CY2jFiS9wC2xB0qLT5Vumrf6jhlvmfh1l-HA&s') }}" class="img-fluid mb-3" alt="Manage Users">
                        <h3 class="feature-title">Manage Users</h3>
                        <p>View, edit, and manage user accounts and memberships.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVFRmzAfbTlNDFMWziGYOC6z8kUk1RehEuuvxdSOdRwQ&s') }}" class="img-fluid mb-3" alt="Manage Programs">
                        <h3 class="feature-title">Manage Programs</h3>
                        <p>Add, update, and delete gym programs available for members.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="{{ asset('https://thumbs.dreamstime.com/b/gym-trainers-happy-arms-crossed-47297720.jpg') }}" class="img-fluid mb-3" alt="Manage Trainers">
                        <h3 class="feature-title">Manage Trainers</h3>
                        <p>Manage trainers, their schedules, and certifications.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('admin.users') }}" class="btn btn-primary btn-lg mr-3">Manage Users</a>
                <a href="{{ route('admin.programs') }}" class="btn btn-primary btn-lg mr-3">Manage Programs</a>
                <a href="{{ route('admin.trainers') }}" class="btn btn-primary btn-lg">Manage Trainers</a>
            </div>
        </div>
    </div>
@endsection
