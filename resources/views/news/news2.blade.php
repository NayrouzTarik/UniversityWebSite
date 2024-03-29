<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #182018;
      color: #fff;
    }

    #sidebar {
      height: 100vh;
      width: 80px;
      background-color: #000000;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px;
    }

    #sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    #sidebar li {
      margin-bottom: 10px;
    }

    #sidebar a {
      text-decoration: none;
      color: white;
      display: flex;
      align-items: center;
    }

    #sidebar a img {
      width: 60px;
      height: 40px;
      margin-left: 5px;
      margin-bottom: 50px;
    }

    #content {
      margin-left: 120px;
      padding: 0px;
    }

    .searchbar {
      margin-bottom: 20px;
      background-color: #000000;
    }

    .searchbar input {
      width: 700px;
      height: 40px;
      padding: 10px;
      margin-right: 70px;
      background-color: #000000;
      border: #000000;
      color: white;
    }

    .searchbar button {
      padding: 10px;
      background-color: #000000;
      color: rgb(255, 255, 255);
      border: none;
      cursor: pointer;
    }

    .infos {
      background-color: #446040;
      padding: 10px;
      margin-top: -18px;
      border-radius: 10px;
    }

    .categories {
      margin-top: 20px;
    }

    .categories ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    .categories li {
      margin-right: 20px;
    }

    .categories li > ul {
      margin-left: 20px;
      display: none;
    }

    .categories a {
      display: block;
      text-decoration: none;
      color: rgb(2, 2, 2);
      padding: 10px;
      background-color: beige;
      border: 1px solid #0b0b0b;
      border-radius: 5px;
    }

    .categories li:hover > ul {
      display: block;
    }

    #login {
      text-decoration: none;
      color: #333;
      padding: 8px;
      margin-left: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #ddd;
    }

    #login:hover {
      background-color: #bbb;
    }

    .actualite-content {
      margin: 20px;
    }

    .actualite-content h2 {
      text-align: center;
    }

    #news-container {
      display: flex;
      flex-direction: column;
      width: 60%;
      max-width: 600px;
      margin: 20px auto;
      background-color: #182018;
      border: 1px solid #4CAF50;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }

    .news {
      display: block;
    }

    .news img {
      width: 100%;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    .news h2 {
      color: #4CAF50;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .news p {
      color: #ccc;
      line-height: 1.5;
    }

    .read-more {
      margin-top: 15px;
      text-align: right;
    }

    .read-more a {
      text-decoration: none;
      color: #4CAF50;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .read-more a:hover {
      color: #357b3b;
    }

    #navigation-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    #prev-btn,
    #next-btn {
      font-size: 20px;
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      outline: none;
      transition: background-color 0.3s ease;
    }

    #prev-btn:hover,
    #next-btn:hover {
      background-color: #357b3b;
    }
    .button-link {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button-link:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>

<div class="actualite-content">
  <h2>Latest News</h2>
  <a href="{{ url('/') }}" class="button-link">← GO BACK</a>
  <div id="news-container">
    <div class="news active" id="news1">
      <h2> Ouverture sur le Monde : Des Bourses d'Études Internationales Offertes aux Étudiants de la Faculté</h2>
      <img src="https://bourses-etudes.net/wp-content/uploads/2020/03/Etudier-a-letranger-1-1.png">
      <p>
        La faculté est fière d'annoncer une gamme exceptionnelle d'opportunités de bourses d'études internationales dans des pays renommés, offrant à nos étudiants la possibilité de vivre une expérience académique et culturelle unique à travers le monde.</p>
        <h2>Bourses de Mobilité Universitaire en France :</h2>
        <p> En partenariat avec des institutions académiques françaises prestigieuses, la faculté offre des bourses de mobilité universitaire pour permettre à nos étudiants d'étudier en France pendant un semestre ou une année académique complète.</p>
        <h2>Programmes de Recherche Collaborative en Allemagne :</h2>
        <p>Des bourses sont disponibles pour des programmes de recherche collaboratifs avec des universités allemandes de renom. Les étudiants auront la chance de travailler sur des projets de recherche innovants tout en bénéficiant de l'expertise de chercheurs allemands de haut niveau.</p>
        <h2>Bourses d'Études Supérieures au Royaume-Uni :</h2>
        <p>Pour les étudiants aspirant à poursuivre des études supérieures à l'étranger, des bourses d'études sont offertes pour soutenir leur démarche au Royaume-Uni. Ces bourses couvrent divers domaines académiques, de la recherche aux programmes professionnels.</p>
        <h2>Stages Internationaux Rémunérés aux États-Unis :</h2>
        <p>Des bourses sont dédiées à soutenir les étudiants dans leur quête de stages internationaux rémunérés aux États-Unis. Ces stages offrent une opportunité unique d'acquérir une expérience professionnelle tout en s'immergeant dans la culture américaine.</p>
        <h2>Bourses de Langues Étrangères en Espagne :</h2>
        <p>Pour ceux désirant perfectionner leurs compétences linguistiques, des bourses spécifiques sont disponibles pour suivre des cours de langue en Espagne. Cela offre une expérience culturelle immersive en plus de renforcer leurs capacités linguistiques.</p>
        <h5>Les étudiants intéressés sont invités à se renseigner auprès du bureau des bourses et des échanges internationaux pour obtenir des informations détaillées sur les critères d'admissibilité et les procédures de candidature. Ces opportunités reflètent l'engagement de la faculté à offrir à ses étudiants des expériences éducatives exceptionnelles dans des destinations académiques de renom à travers le monde.</h5>
    </div>
  </div>
</div>
</body>
</html>
