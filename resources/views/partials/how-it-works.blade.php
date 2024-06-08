<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Section</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .section {
            padding: 40px 0;
        }

        .blue-section {
            background-color: #007bff;
            color: white;
        }

        .green-section {
            background-color: #28a745;
            color: white;
        }

        .box {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body style="color: black">
    <div class="section blue-section">
        <div class="container">
            <h2 class="text-center">Besoin d’un service ?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="icon">1</div>
                        <h3>Exprimez votre besoin</h3>
                        <p>Recherchez le professionnel ou le service au niveau du moteur de recherche de la plateforme OU postez votre besoin gratuitement...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="icon">2</div>
                        <h3>Vous recevez des propositions</h3>
                        <p>Les professionnels que vous avez contactés vont vous répondre avec des propositions...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="icon">3</div>
                        <h3>Choisissez la proposition idéale</h3>
                        <p>Affinez les propositions que vous avez reçues et mettez-vous d'accord avec le professionnel...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section green-section">
        <div class="container">
            <h2 class="text-center">Voulez-vous proposer vos services ?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="icon">1</div>
                        <h3>Inscrivez-vous</h3>
                        <p>Vous êtes une société, un auto-entrepreneur ou même un freelancer au Maroc ? Inscrivez-vous...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="icon">2</div>
                        <h3>Proposez votre service</h3>
                        <p>Vous avez 2 options pour proposer vos services...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="icon">3</div>
                        <h3>Échangez avec le client</h3>
                        <p>Échangez avec les clients qui vous ont contactés...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
