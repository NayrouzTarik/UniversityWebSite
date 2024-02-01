<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #324032;
            color: #fff;
        }

        header {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        header p {
            margin-top: 5px;
            font-size: 1.2em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #1a1a1a;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            transition: box-shadow 0.3s ease;
        }

        section:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        }

        h2 {
            color: #fff;
        }

        p {
            line-height: 1.6;
        }

        address {
            font-style: normal;
        }
        nav {
            background-color: #182018;
            padding: 10px 0;
            text-align: center;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        li {
            margin: 0 15px;
            font-size: 1.2em;
        }

        a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #6bc46d; /* Change the color on hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Université de Khouribga</h1>
        <p>Libérer les esprits, façonner l'avenir</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about-us">À Propos de Nous</a></li>
            <li><a href="#mission-vision">Mission & Vision</a></li>
            <li><a href="#academic-programs">Programmes Académiques</a></li>
            <li><a href="#research">Excellence en Recherche</a></li>
            <li><a href="#campus-life">Vie sur le Campus</a></li>
            <li><a href="#alumni">Succès des Diplômés</a></li>
        </ul>
    </nav>

    <section class="about-us" id="about-us">
        <h2>À Propos de Nous <i class="fas fa-university"></i></h2>
        <p>Bienvenue à l'Université de Khouribga, une institution distinguée reconnue pour son savoir académique, son excellence en recherche et son impact mondial. En tant que l'une des plus grandes et prestigieuses universités au monde, nous sommes fiers de notre riche histoire, de notre communauté diversifiée et de notre engagement à repousser les limites du savoir.</p>
        <p>Notre campus expansif est un centre d'activité intellectuelle, favorisant un environnement où étudiants, enseignants et chercheurs collaborent pour relever les défis complexes de notre époque. Avec un engagement envers l'inclusivité et la diversité, nous célébrons les perspectives uniques et les talents que chaque membre de notre communauté apporte.</p>
    </section>

    <section class="mission-vision" id="mission-vision">
        <h2>Mission & Vision <i class="fas fa-lightbulb"></i></h2>
        <p>Notre mission est de fournir une éducation de classe mondiale qui habilite les individus à faire des contributions significatives à la société. Nous nous efforçons de cultiver une culture de la curiosité, de la pensée critique et de la créativité, préparant nos étudiants à prospérer dans un paysage mondial en évolution rapide.</p>
        <p>Notre vision est d'être un pionnier dans l'éducation, la recherche et l'innovation. Nous aspirons à être un catalyseur de changement positif, façonnant l'avenir en produisant des leaders qui ne sont pas seulement des experts dans leurs domaines, mais aussi des contributeurs compatissants et éthiques à leurs communautés.</p>
    </section>

    <section class="academic-programs" id="academic-programs">
        <h2>Programmes Académiques <i class="fas fa-graduation-cap"></i></h2>
        <p>Explorez une gamme étendue de programmes académiques conçus pour répondre aux intérêts variés et aux aspirations de nos étudiants. De la licence au doctorat, notre programme est conçu pour offrir une éducation holistique qui équipe les diplômés avec les compétences et les connaissances nécessaires pour exceller dans leur domaine choisi.</p>
        <p>Notre corps professoral, composé d'experts et de leaders d'opinion, est dédié à promouvoir un environnement d'excellence académique, assurant que nos diplômés sont bien préparés pour réussir dans leur carrière et au-delà.</p>
    </section>

    <section class="research" id="research">
        <h2>Excellence en Recherche <i class="fas fa-flask"></i></h2>
        <p>Au cœur de notre université se trouve un engagement envers la recherche qui fait progresser la compréhension humaine et aborde les défis mondiaux. Nos centres de recherche de pointe et nos laboratoires fournissent un espace collaboratif pour les enseignants et les étudiants afin de participer à des projets innovants dans diverses disciplines.</p>
        <p>Des découvertes scientifiques à des solutions innovantes dans les sciences humaines, nos efforts de recherche contribuent à l'amélioration de la société et renforcent notre position en tant que leader dans la découverte académique.</p>
    </section>

    <section class="campus-life" id="campus-life">
        <h2>Vie sur le Campus <i class="fas fa-building"></i></h2>
        <p>Vivez une vie de campus vibrante et inclusive qui va au-delà de la salle de classe. Nos étudiants participent à une multitude d'activités parascolaires, y compris des clubs, des sports, des arts et des événements culturels. Le campus n'est pas seulement un lieu d'apprentissage; c'est une communauté où des amitiés durables sont forgées et où la croissance personnelle est encouragée.</p>
        <p>Avec des installations de pointe, des espaces récréatifs et une myriade d'opportunités, notre université offre un environnement enrichissant où les étudiants peuvent explorer leurs passions, découvrir de nouveaux centres d'intérêt et se développer en individus bien équilibrés.</p>
    </section>

    <section class="alumni" id="alumni">
        <h2>Succès des Diplômés <i class="fas fa-users"></i></h2>
        <p>Nos anciens élèves sont des leaders, des innovateurs et des acteurs de changement dans leurs domaines respectifs. En tant qu'ambassadeurs de l'université, ils ont apporté d'importantes contributions à la société, façonnant des industries et ayant un impact positif à l'échelle mondiale.</p>
        <p>Rejoindre les rangs de notre réseau d'anciens élevés signifie faire partie d'une communauté qui continue à se soutenir et à s'inspirer mutuellement tout au long de leur parcours professionnel.</p>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
         document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('nav a');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    window.scrollTo({
                        top: targetElement.offsetTop - 20,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>
