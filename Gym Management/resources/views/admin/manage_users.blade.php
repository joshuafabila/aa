@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Users</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.shutterstock.com/image-photo/portrait-mature-man-smiling-camera-600nw-524561431.jpg" class="card-img-top" alt="User Image">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">Email: john.doe@example.com</p>
                        <p class="card-text">Membership: Gold</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFRmLMxoBx-RMN2RPzPUZJzTusmrQuICZplA&s" class="card-img-top" alt="User Image">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">Email: jane.smith@example.com</p>
                        <p class="card-text">Membership: Silver</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
