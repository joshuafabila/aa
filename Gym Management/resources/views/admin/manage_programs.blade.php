@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Programs</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://skinnyms.com/wp-content/uploads/2015/12/Top-5-Weight-Loss-Plans-You-Need-in-Your-Life-600x400.jpg" class="card-img-top" alt="Program Image">
                    <div class="card-body">
                        <h5 class="card-title">Weight Loss Program</h5>
                        <p class="card-text">Description: A comprehensive program for weight loss.</p>
                        <a href="#" class="btn btn-primary">Edit Program</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.sixstarpro.com/cdn/shop/articles/training-for-basketball.jpg?v=1676489176" class="card-img-top" alt="Program Image">
                    <div class="card-body">
                        <h5 class="card-title">Strength Training</h5>
                        <p class="card-text">Description: Build muscle strength and endurance.</p>
                        <a href="#" class="btn btn-primary">Edit Program</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToXNNEmwhMZ8JDpgxK3EGObJVpS1V5zvrJVw&s" class="card-img-top" alt="Program Image">
                    <div class="card-body">
                        <h5 class="card-title">Yoga Classes</h5>
                        <p class="card-text">Description: Relaxing yoga sessions for flexibility and stress relief.</p>
                        <a href="#" class="btn btn-primary">Edit Program</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
