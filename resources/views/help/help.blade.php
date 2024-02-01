<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background: #556B2F;
      color: #333;
    }

    header {
      background-color: #8FBC8F; 
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      margin-top: 10px;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav li {
      display: inline-block;
      margin-right: 15px;
    }

    nav a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    main {
      padding: 20px;
    }

    .hero {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 40px;
      text-align: center;
      border-radius: 10px;
    }

    .hero h2 {
      color: #8FBC8F;
    }

    section {
      margin-bottom: 40px;
    }

    a {
      color: #8FBC8F;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #556B2F; 
      color: white;
      text-align: center;
      padding: 10px;
      position: relative;
    }

    .faq-section {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 10px;
    }

    .faq-item {
      margin-bottom: 20px;
    }
  </style>
  <title>Aide | Université de Khouribga</title>
</head>
<body>
  <header>
    <h1>Université de Khouribga</h1>
    <nav>
      <ul>
        <li><a href="https://www.udemy.com/fr/">Cours</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <h2>Bienvenue dans le Centre d'Aide de l'Université de Khouribga !</h2>
      <p>Nous sommes là pour vous aider à tirer le meilleur parti de votre expérience universitaire. Que vous soyez étudiant, enseignant ou membre du personnel, trouvez des ressources utiles ci-dessous.</p>
    </section>

    <section>
      <h3>Questions fréquemment posées</h3>
      <p>Consultez notre section FAQ pour trouver des réponses aux questions courantes relatives aux admissions, aux cours, et plus encore.</p>
      <a href="#faq">Explorer la FAQ</a>
    </section>

    <section>
      <h3>Contactez le support</h3>
      <p>Si vous ne trouvez pas l'information dont vous avez besoin, notre équipe de support est prête à vous aider. N'hésitez pas à nous contacter par e-mail ou par téléphone.</p>
      <a href="{{ route('contact.show') }}">Contacter le support</a>
    </section>

    <section id="faq" class="faq-section">
      <h3>Section FAQ</h3>
      <div class="faq-item">
        <h4>Quels cours sont proposés ?</h4>
        <p>Explorez notre large gamme de cours sur la <a href="https://www.udemy.com/fr/">page Cours</a>. Vous trouverez des informations détaillées sur chaque programme.</p>
      </div>

      <div class="faq-item">
        <h4>Comment réinitialiser mon mot de passe ?</h4>
        <p>Pour réinitialiser votre mot de passe, veuillez vous rendre à l'Administration et suivre les instructions fournies.</p>
      </div>

      <a href="#top">Retour en haut</a>
    </section>
  </main>
</body>
</html>
