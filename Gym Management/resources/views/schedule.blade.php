<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule - Gym Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .list-group-item {
            margin-bottom: 10px;
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
        <h1 class="mt-5 text-center">Our Schedule</h1>
        <ul class="list-group mt-4">
            <li class="list-group-item">Monday: Yoga Class - 9:00 AM to 10:00 AM</li>
            <li class="list-group-item">Tuesday: CrossFit Training - 6:00 PM to 7:00 PM</li>
            <li class="list-group-item">Wednesday: Pilates Session - 10:30 AM to 11:30 AM</li>
            <li class="list-group-item">Thursday: Zumba Dance - 5:30 PM to 6:30 PM</li>
            <li class="list-group-item">Friday: Weightlifting Workshop - 4:00 PM to 5:00 PM</li>
        </ul>
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
</body>
</html>
