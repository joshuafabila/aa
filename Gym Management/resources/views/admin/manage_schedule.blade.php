@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Schedule</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Monday - Yoga Classes</h5>
                        <p class="card-text">Time: 9:00 AM - 10:00 AM</p>
                        <p class="card-text">Trainer: Emily Davis</p>
                        <a href="#" class="btn btn-primary">Edit Schedule</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tuesday - Strength Training</h5>
                        <p class="card-text">Time: 5:00 PM - 6:00 PM</p>
                        <p class="card-text">Trainer: Michael Johnson</p>
                        <a href="#" class="btn btn-primary">Edit Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wednesday - Pilates</h5>
                        <p class="card-text">Time: 10:00 AM - 11:00 AM</p>
                        <p class="card-text">Trainer: Sarah Lee</p>
                        <a href="#" class="btn btn-primary">Edit Schedule</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thursday - Cardio</h5>
                        <p class="card-text">Time: 6:30 PM - 7:30 PM</p>
                        <p class="card-text">Trainer: John Smith</p>
                        <a href="#" class="btn btn-primary">Edit Schedule</a>
                    </div>
                </div>
            </div>
            <!-- Add more schedules as needed -->
        </div>
    </div>
</div>

@endsection
