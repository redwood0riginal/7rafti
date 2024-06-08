<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/services-section.css') }}">
    <style>
        /* Add your custom styles here */
        .services-section {
            padding: 40px 0;
        }

        .service {
            text-align: center;
            margin-bottom: 40px; /* Increased bottom margin to add more space */
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .service:hover {
            transform: scale(1.05);
        }

        .service img {
            width: 100%; /* Make the image responsive */
            max-width: 300px; /* Set the max-width */
            height: 250px; /* Set the height to a fixed value */
            border-radius: 10px; /* Add border radius for rounded corners */
            object-fit: cover; /* Ensure the image covers the container */
        }

        .service h3 {
            margin-top: 10px;
        }
    </style>
</head>
<body style="color: black">

<section class="services-section" >
    <div class="container">
        <h2 class="text-center">De quoi avez-vous besoin?</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/argile.jpeg') }}" alt="argile" class="img-fluid">
                    <h3>Argile</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/cuir.jpg') }}" alt="Cuir" class="img-fluid">
                    <h3>Cuir</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/boulanger.jpg') }}" alt="Boulanger" class="img-fluid">
                    <h3>Boulanger</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/menuisier.png') }}" alt="Menuisier" class="img-fluid">
                    <h3>Menuisier</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
