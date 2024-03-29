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
      <h2>News 1</h2>
      <img src="https://www.edinfo.ma/images/uploads/20151209105840_67441.jpg" class="news1">
      <p>Dans une démarche innovante et en quête de nouveaux talents, un consortium d'entreprises de premier plan s'apprête à investir le campus universitaire pour rencontrer et recruter les étudiants les plus prometteurs. Cet événement, qui aura lieu le mois prochain, vise à créer une passerelle directe entre le monde académique et professionnel, offrant aux étudiants l'opportunité de se connecter avec des entreprises de renom.
        Parmi les entreprises participantes, on compte des géants de la technologie, des firmes financières de premier plan et des start-ups innovantes. Cette initiative témoigne de l'engagement croissant des entreprises à repérer des talents dès les bancs de l'université et à investir dans le développement de jeunes professionnels.
        Les représentants des entreprises organiseront des séances d'information, des ateliers interactifs et des entretiens sur place pour évaluer les compétences et les aspirations des étudiants. Les opportunités de stages, de programmes de formation et d'emploi à temps plein seront présentées, offrant aux étudiants une vision concrète des possibilités de carrière dans différentes industries.
        Le Professeur Larbi El Hilali , Doyen de l'Université, a exprimé son enthousiasme quant à cette collaboration unique entre l'établissement et le secteur privé. Il a déclaré : "Cette initiative marque une étape importante dans notre engagement envers la réussite professionnelle de nos étudiants. Nous sommes ravis de voir nos diplômés potentiels interagir directement avec des entreprises leaders et de créer des opportunités significatives pour leur avenir."
        Les étudiants sont encouragés à se préparer en conséquence, en mettant à jour leurs CVs, en recherchant des informations sur les entreprises participantes et en réfléchissant à leurs objectifs professionnels. L'événement s'annonce comme une occasion inestimable pour les étudiants de réseauter, d'apprendre directement des professionnels de l'industrie et de peut-être trouver leur chemin vers des opportunités professionnelles excitantes.
        Cet événement souligne la collaboration positive entre le monde académique et l'industrie, ouvrant la voie à de futures initiatives visant à renforcer les liens entre l'éducation supérieure et le marché du travail.</p> 
    </div>
  </div>
</div>
</body>
</html>
