<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Université de Khouribga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #324032;
            overflow-x: hidden; 
        }

        header {
            background-color: #324032;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        h2 {
            color: #324032;
            text-align: center;
            margin-bottom: 30px;
        }

        .service {
            border: 1px solid #e0e0e0;
            margin: 10px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            transition: transform 0.3s;
            width: 300px;
        }

        .service:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #324032;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .service i {
            margin-right: 10px;
            color: #324032;
        }
    </style>
</head>
<body>

    <header>
        <h1>Université de Khouribga</h1>
        <p>Page des Services</p>
    </header>

    <section>
        <div class="service">
            <h3><i class="fas fa-graduation-cap"></i> Service d'Orientation</h3>
            <p>Notre service d'orientation vous aide à choisir le bon programme d'études en fonction de vos intérêts et objectifs académiques.</p>
        </div>
        <div class="service">
            <h3><i class="fas fa-chalkboard-teacher"></i> Services de Tutorat</h3>
            <p>Nos tuteurs qualifiés offrent un soutien individuel aux étudiants qui ont besoin d'aide supplémentaire dans leurs cours.</p>
        </div>

        <div class="service">
            <h3><i class="fas fa-flask"></i> Centre de Recherche</h3>
            <p>Le centre de recherche de l'Université de Khouribga favorise l'innovation et la découverte à travers divers projets de recherche.</p>
        </div>

        <div class="service">
            <h3><i class="fas fa-globe"></i> Programmes d'Échange International</h3>
            <p>Participez à nos programmes d'échange pour vivre une expérience internationale et élargir vos horizons académiques et culturels.</p>
        </div>

        <div class="service">
            <h3><i class="fas fa-book"></i> Services de Bibliothèque</h3>
            <p>Accédez à notre vaste collection de ressources académiques et profitez des services de bibliothèque pour soutenir vos études.</p>
        </div>

    </section>

    <footer>
        <p></p>
    </footer>

</body>
</html>
