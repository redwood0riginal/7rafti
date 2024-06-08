<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/services-section.css') }}">
    <style>
        /* Add your custom styles here */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .services {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .service {
            text-align: center;
            margin-bottom: 40px; /* Increased bottom margin to add more space */
            width: calc(25% - 40px); /* Adjust width and margin as per your preference */
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .service:hover {
            transform: scale(1.05);
        }

        .service img {
            width: 300px; /* Set the width to a fixed value */
            height: 250px; /* Set the height to a fixed value */
            border-radius: 10px; /* Add border radius for rounded corners */
        }

        .service h3 {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<section class="services-section">
    <div class="container">
        <h2>De quoi avez-vous besoin?</h2>
        <div class="services">
            <div class="service">
                <img src="{{ asset('images/argile.jpeg') }}" alt="argile">
                <h3>Argile</h3>
            </div>
            <div class="service">
                <img src="{{ asset('images/cuir.jpg') }}" alt="Cuir">
                <h3>Cuir</h3>
            </div>
            <div class="service">
                <img src="{{ asset('images/boulanger.jpg') }}" alt="Boulanger">
                <h3>Boulanger</h3>
            </div>
            <div class="service">
                <img src="{{ asset('images/menuisier.png') }}" alt="Menuisier">
                <h3>Menuisier</h3>
            </div>
        </div>
    </div>
</section>

</body>
</html>
