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
      <img src="https://pro.etudiant.lefigaro.fr/wp-content/uploads/2022/10/shutterstock_1494218468.jpg" class="news1">
        <p>Notre campus s'engage résolument dans une ère d'innovation avec le déploiement de nouvelles technologies et initiatives modernes qui transforment l'environnement académique. Ces développements témoignent de l'engagement de la faculté à rester à la pointe de la technologie pour offrir une expérience d'apprentissage enrichissante</p>
        <h2>Wi-Fi 6 et Connexion Ultra-Rapide :</h2>
        <p>Le campus fait un bond en avant avec l'implémentation du Wi-Fi 6, offrant une connectivité ultrarapide aux étudiants et au personnel. Cette technologie améliorée garantit une expérience en ligne fluide, essentielle pour les recherches, les cours en ligne et la collaboration sur des projets.</p>
        <h2>Salles de Classe Interactives :</h2>
        <p>Les salles de classe traditionnelles évoluent vers des espaces interactifs dotés de tableaux intelligents, de caméras haute définition et de systèmes audio de pointe. Ces améliorations permettent des sessions d'apprentissage plus engageantes et favorisent l'interaction entre les étudiants et les enseignants.</p>
        <h2>Sécurité Technologique Renforcée :</h2>
        <p>La sécurité sur le campus est renforcée grâce à l'intégration de systèmes de sécurité avancés. Des caméras intelligentes, des solutions de reconnaissance faciale et des dispositifs de contrôle d'accès assurent un environnement sûr pour tous les membres de la communauté universitaire</p>
        <h2>Programmes de Formation en Intelligence Artificielle (IA):</h2>
        <p>La faculté lance des programmes de formation en intelligence artificielle pour préparer les étudiants aux défis de l'avenir. Des laboratoires équipés des dernières technologies en matière d'IA offrent aux étudiants des opportunités pratiques pour développer leurs compétences dans ce domaine en pleine expansion.</p>
        <h5>Ces initiatives marquent le début d'une ère nouvelle sur notre campus, où la technologie et l'innovation convergent pour créer un environnement propice à l'apprentissage, à la recherche et à la durabilité. La faculté demeure déterminée à investir dans des infrastructures modernes pour offrir une expérience éducative de qualité et préparer les étudiants aux défis de demain.</h5>
    </div>
  </div>
</div>
</body>
</html>
