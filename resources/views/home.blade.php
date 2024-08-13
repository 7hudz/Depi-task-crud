<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">welcome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1 class="display-4">Control Your Business</h1>
        <p class="lead">Your one-stop solution for all your needs.</p>
        <a href="{{ route('companies') }}" class="btn btn-primary btn-lg">Add Your company</a>
    </div>
</section>

<section class=" bg-secondary text-white py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 mb-4">
                <div class="features-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <h3 class="h5">Fast Performance</h3>
                <p>Experience lightning-fast speed with our optimized solutions.</p>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="features-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h3 class="h5">Secure</h3>
                <p>We prioritize your security with our top-notch protection measures.</p>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="features-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <h3 class="h5">User Friendly</h3>
                <p>Our services are designed to be intuitive and easy to use.</p>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <p>&copy; 2024 MyWebsite. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-dark">Privacy Policy</a> | 
            <a href="#" class="text-dark">Terms of Service</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
