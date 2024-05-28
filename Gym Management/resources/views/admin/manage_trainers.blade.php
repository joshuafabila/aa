@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Trainers</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDSoMiIKQ44y-7VuK0ce26XP0gfb1xd-G1Mw&s" class="card-img-top" alt="Trainer Image">
                    <div class="card-body">
                        <h5 class="card-title">Michael Johnson</h5>
                        <p class="card-text">Specialty: Personal Trainer</p>
                        <p class="card-text">Certifications: ACE, NASM</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.shutterstock.com/image-photo/healthy-asian-athlete-woman-sportswear-600nw-2131540853.jpg" class="card-img-top" alt="Trainer Image">
                    <div class="card-body">
                        <h5 class="card-title">Emily Davis</h5>
                        <p class="card-text">Specialty: Yoga Instructor</p>
                        <p class="card-text">Certifications: RYT-200</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
