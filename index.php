<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Mon Portfolio</title>

  <!-- box icons -->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />

  <!-- custom css -->
</head>
<body>
  <header class="header">
    <a href="#" class="logo">Aboubakar Bamba </a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#home" class="active">Accueille</a>
      <a href="#about">À propos</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>
  <!-- home section design -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Bonjour Je suis</h3>
      <h1>Aboubakar Bamba</h1>
      <h3>Et je suis un <span class="multiple-text"></span></h3>
      <p>
        Je suis un étudiant de 18 ans en bachelor développeur web au campus
        <br />
        Hetic et je suis actuellement à la recherche d'une alternance
      </p>
      <div class="social-media">
        <a href="#"><i class="bx bxl-linkedin-square"></i></a>
        <a href="#"><i class="bx bxl-github"></i></a>
      </div>
      <a href="#" class="btn">Télécharger le CV</a>
    </div>

    <div class="home-img">
      <img src="images/Aboubaakar tete (1).png" alt="" class="image" />
    </div>
  </section>

  <!-- about section design -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="images/Aboubaakar tete (1).png" alt="" />
    </div>

    <div class="about-content">
      <h2 class="heading">À propos de <span> Moi</span></h2>
      <h3>Étudiant ( Développeur FrontEnd devenir ! )</h3>
      <p>
        Je suis Aboubakar Bamba, étudiant au campus HETIC à Montreuil, et j'ai
        acquis les bases de la programmation en développement web. J'ai appris
        les principes fondamentaux du codage, de la conception de sites web et
        de la création d'applications interactives. Grâce à cela, j'ai pu
        développer mes propres projets et je suis enthousiaste à l'idée de
        continuer à explorer et à développer mes compétences dans ce domaine
        en constante évolution.
      </p>
      <a
        href="https://www.linkedin.com/in/aboubakar-bamba-5b2279274/"
        class="btn"
        >En savoir plus</a
      >
    </div>
  </section>

  <!-- service section design  -->

  <section class="services" id="services">
    <h2 class="heading">Mes <span>Services</span></h2>

    <div class="services-container">
      <div class="services-box">
        <i class="bx bx-code-alt"></i>
        <h3>Développement Web</h3>
        <p>
          Comme énoncer dans la précédente section, j'ai eu le privilège
          d'apprendre la programmation informatique grace à de nombreux
          intervenant venu nous partage leur savoir dans le domaine . J'ai
          donc appris à intégrer des maquettes en, HTML et CSS, et à les
          rendre dynamique avec Javascript. J'ai notamment pu apprendre a
          manipuler des base de donnée avec PHP , MySql , MAMP
        </p>
        <a
          href="https://www.hetic.net/formations/bachelor-web/programme-bachelor-web"
          class="btn"
          >En savoir plus</a
        >
      </div>

      <div class="services-box">
        <i class="bx bxs-paint"></i>
        <h3>Web Design</h3>
        <p>
          Grâce à mon précédent cursus en Grande École, j'ai acquis de
          l'expérience dans la réalisation de maquettes et la compréhension
          des nouvelles tendances du design. Avec l'aide d'intervenants, j'ai
          appris à utiliser Figma pour créer des maquettes interactives et à
          appliquer les principes de l'expérience utilisateur, de manière à ce
          que mon site soit visuellement agréable à utiliser .
        </p>
        <a href="https://www.hetic.net/formations/grande-ecole" class="btn"
          >En savoir plus</a
        >
      </div>

      <div class="services-box">
        <i class="bx bx-bar-chart-alt"></i>
        <h3>Marketing Digital</h3>
        <p>
          Le marketing digital fait partie aujourd'hui d'un des points les
          plus important pour une entreprise, de manière à ce que cette
          dernière puisse accroitre ces gains. Hetic a compris ce concept
          c'est pourquoi durant mon précédent cursus j'ai au le privilege de
          développer mes compétences orales et a développé des stratégies
          marketing intéressant
        </p>
        <a href="https://www.hetic.net/formations/grande-ecole" class="btn"
          >En savoir plus</a
        >
      </div>
    </div>
  </section>

  <!-- portfolio section design -->

  <section class="portfolio" id="portfolio">
    <h2 class="heading">Projet <span>Recent</span></h2>

    <div class="portfolio-container">
      <div class="portfolio-box">
        <img src="images/Capture d’écran (5).png" alt="" class="imgpt" />
        <div class="portfolio-layer">
          <h4>Développement Web</h4>
          <p>Projet météo HTML , CSS , Javascript</p>
          <a href="https://aboubakar-bamba-weather-app.netlify.app/"
            ><i class="bx bx-link-external"></i
          ></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="images/Capture d’écran (3).png" alt="" class="imgpt" />
        <div class="portfolio-layer">
          <h4>Développement Web</h4>
          <p>Projet portfolio HTML , CSS , Javascript</p>
          <a href="#"><i class="bx bx-link-external"></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="images/Capture d’écran (2).png" alt="" class="imgpt" />
        <div class="portfolio-layer">
          <h4>Développement Web</h4>
          <p>
            Catalogue de film avec l'api de The movie database en React.js
          </p>
          <a href="#"><i class="bx bx-link-external"></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="images/Capture d’écran (6).png" alt="" class="imgpt" />
        <div class="portfolio-layer">
          <h4>Développement web</h4>
          <p>Home-page d'un site HTML , CSS</p>
          <a href="#"><i class="bx bx-link-external"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section design -->
  <section class="contact" id="contact">
    <h2 class="heading">Contactez <span>Moi !</span></h2>

    <form action="" method="post">
      <div class="input-box">
        <input type="text" placeholder="Nom" name="name" />
        <input type="email" placeholder="Adresse Email" name="email" />
      </div>
      <div class="input-box">
        <input type="number" placeholder="Téléphone" name="phone_number" />
        <input type="text" placeholder="Objet" name="subject" />
      </div>
      <textarea
        name=""
        id=""
        cols="30"
        rows="10"
        placeholder="Votre Message"
        name="message"
      ></textarea>
      <input
        type = "submit"
        value="Envoyer votre message"
        class="btn"
        name="ok"
      />
    </form>
  </section>

  <!-- footer design -->

  <footer class="footer">
    <div class="footer-text">
      <p>
        Copyright &copy; 2023 by Aboubakar Bamba |
        All Rights Reserved.
      </p>
    </div>

    <div class="footer-iconTop">
      <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
    </div>
  </footer>

  <!-- scoll reveal  -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- typed js  -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

  <!-- custom js -->
  <script src="./script.js"></script>
  
  
</body>

</html>
<?php
try {
  $bdd = new PDO(
    'mysql:host=localhost;dbname=database_portfolio;charset=utf8',
    'root',
    'root'
  );
} catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['ok'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $req = $bdd->prepare(
    'INSERT INTO messages (nom, email, telephone, objet, user_message)
     VALUES (:username, :email, :phone_number, :subject, :message)'
  );

  $req->bindParam(':username', $username);
  $req->bindParam(':email', $email);
  $req->bindParam(':phone_number', $phone_number);
  $req->bindParam(':subject', $subject);
  $req->bindParam(':message', $message);

  $req->execute();

  echo '<script>alert("Message envoyé !");</script>';
}
?>