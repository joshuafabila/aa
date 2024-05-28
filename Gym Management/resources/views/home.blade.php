<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Gym Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .jumbotron {
            background-color: #f8f9fa;
            padding: 3rem;
            border-radius: 10px;
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .feature-title {
            font-size: 1.5rem;
        }
        .navbar-custom {
            background-color: #343a40;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        body {
            padding-bottom: 70px; /* Adjust based on footer height */
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .feature-box {
            padding: 2rem;
            text-align: center;
        }
        .feature-box img {
            max-width: 300px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Gym Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('programs') }}">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trainers') }}">Trainers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('schedule') }}">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h1 class="mt-5 text-center">Welcome to the Gym Management System</h1>
        <div class="jumbotron mt-4">
            <h2 class="text-center">Get Fit with Our Expert Trainers</h2>
            <p class="lead text-center">Join our gym and access a variety of exercise programs tailored to your needs.</p>
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMG97JR-CY2jFiS9wC2xB0qLT5Vumrf6jhlvmfh1l-HA&s" class="img-fluid mb-3" alt="Customized Programs">
                        <h3 class="feature-title">Customized Programs</h3>
                        <p>Explore a variety of exercise programs designed for different fitness goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVFRmzAfbTlNDFMWziGYOC6z8kUk1RehEuuvxdSOdRwQ&s" class="img-fluid mb-3" alt="Expert Trainers">
                        <h3 class="feature-title">Expert Trainers</h3>
                        <p>Meet our experienced trainers who specialize in various fitness disciplines.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <img src="https://cdn.pixabay.com/photo/2017/01/18/17/52/calendar-1990453_1280.jpg" class="img-fluid mb-3" alt="Flexible Schedule">
                        <h3 class="feature-title">Flexible Schedule</h3>
                        <p>Choose from flexible workout schedules that fit your daily routine.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('programs') }}" class="btn btn-primary btn-lg">Explore Programs</a>
            </div>
        </div>

        <!-- Additional Section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://images.ctfassets.net/cnu0m8re1exe/3qzr3eoWDYXq9tHmnr3QzK/dade797f13615399d1be31d5d68246a6/shutterstock_1660411888.jpg" class="card-img-top" alt="Yoga Classes">
                    <div class="card-body">
                        <h5 class="card-title">Yoga Classes</h5>
                        <p class="card-text">Join our calming yoga sessions to enhance flexibility and reduce stress.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.ihrsa.org/uploads/Articles/Column-Width/personal-training_dietitian-fruits-stock_column.jpg" class="card-img-top" alt="Nutrition Counseling">
                    <div class="card-body">
                        <h5 class="card-title">Nutrition Counseling</h5>
                        <p class="card-text">Get personalized nutrition advice from our experts to achieve your fitness goals.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span>© 2024 Gym Management System. All rights reserved.</span>
        </div>
    </footer>

    <!-- JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
