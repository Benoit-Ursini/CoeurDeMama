<?php
session_start();
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./images/logos/shortcut.png" />
    <title>Coeur de mama - Doula - Contact</title>
    <meta
      name="description"
      content="Doula, je t'accompagne et te soutiens dans cette merveilleuse aventure qu'est la maternité. Tu retrouveras mes services en ligne mais également en présentiel en Algarve au Portugal."
    />
    <meta
      name="keywords"
      content="Doula, accompagnante, naissance, maternité, accouchement, physiologie, Algarve, Portugal, holistique, soutiens, formation, transmission, masterclass, Rebozo"
    />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans&family=Simonetta&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <div class="header">
        <div class="headernetwork">
          <a
            href="https://www.instagram.com/coeur_de_mama_/"
            target="_blank"
            class="fa fa-instagram"
            title="Mon compte Instagram"
          ></a>
          <a
            href=""
            target="_blank"
            class="fa fa-facebook"
            title="Mon compte Facbook"
          ></a>
        </div>
        <div class="headerlogo headerlogo--desktop">
          <img
            class="headerlogo__img"
            src="./images/logos/leaf1.svg"
            alt="Dessin d'une branche avec des feuilles"
          />
          <a href="index.html">
            <img
              class="headerlogo__img headerlogo__img--link"
              src="./images/logos/logo.svg"
              alt="Logo Coeur de mama"
              title="Accueil - Coeur de mama"
            />
          </a>
          <img
            class="headerlogo__img"
            src="./images/logos/leaf2.svg"
            alt="Dessin d'une branche avec des feuilles"
          />
        </div>
        <div class="headertitle">
          <p class="headertitle__txt">Coeur de mama</p>
        </div>
      </div>

      <nav id="up" class="nav">
        <a class="navlogo" href="index.html">
          <img
            class="navlogo__img"
            src="./images/logos/logo.svg"
            alt="Logo Coeur de mama"
            title="Accueil - Coeur de mama"
          />
          <p class="navlogo__title">Coeur de mama</p>
        </a>

        <div class="navtoggle">
          <i class="fas fa-bars ouvrir"></i>
          <i id="fermer" class="fas fa-times"></i>
        </div>

        <ul class="navmenu">
          <li>
            <a class="navmenu__link" href="./index.html" title="Accueil"
              >Accueil</a
            >
          </li>
          <li>
            <a
              class="navmenu__link"
              href="./messervices.html"
              title="Mes services"
              >Mes services</a
            >
          </li>
          <li>
            <a
              class="navmenu__link"
              href="./monparcours.html"
              title="Mon parcours"
              >Mon parcours</a
            >
          </li>
          <!-- <li>
            <a class="navmenu__link" href="./blog.html" title="Blog">Blog</a>
          </li> -->
          <!-- <li>
            <a class="navmenu__link" href="./vosretours.html" title="Vos retours">Vos retours</a>
          </li> -->
          <li>
            <a class="navmenu__link" href="./contact.php" title="Contact"
              >Contact</a
            >
          </li>
          <li>
            <a
              href="https://www.paypal.com/donate/?hosted_button_id=HWA8F7NUCMKMS"
              class="navmenu__button"
              >Faire un don</a
            >
          </li>
          <div class="navmenu--responsive">
            <a
              href="https://www.instagram.com/coeur_de_mama_/"
              target="_blank"
              class="fa fa-instagram"
              title="Mon compte Instagram"
            ></a>
            <a
              href=""
              target="_blank"
              class="fa fa-facebook"
              title="Mon compte Facbook"
            ></a>
          </div>
        </ul>
      </nav>
    </header>

    <main>
      <h1 class="reveal">Contactez-moi</h1>
      <?php if(array_key_exists('errors', $_SESSION)): ?>
      <div class="form__message form__message--errors">
        <?= implode('<br>', $_SESSION['errors']); ?>
      </div>
      <?php endif; ?>
      <?php if(array_key_exists('success', $_SESSION)): ?>
      <div class="form__message form__message--success">
        Ton email a bien été envoyé &#128521;
      </div>
      <?php endif; ?>

      <section class="container-description">
        <div class="container-withline--block reveal-2">
          <img
            class="contact__img"
            src="./images/parcours/presentation1.png"
            alt=""
          />
          <h3 class="contact__name">Sara Ursini Bouziane</h3>
          <p>France</p>
          <a class="contact__link" href="tel:+33635105536"
            >06 35 10 55 36</a
          >
          <a class="contact__link" href="mailto:sara.coeurdemama@gmail.com"
            >sara.coeurdemama@gmail.com</a
          >
          <div class="headernetwork">
            <a
              href="https://www.instagram.com/coeur_de_mama_/"
              target="_blank"
              class="fa fa-instagram"
              title="Mon compte Instagram"
            ></a>
            <a
              href=""
              target="_blank"
              class="fa fa-facebook"
              title="Mon compte Facebook"
            ></a>
          </div>
        </div>
        <form
          class="container-withline--block form-contact reveal-2"
          action="./php/post_contact.php"
          method="POST"
        >
          <div class="form-contact--user">
            <input
              class="form-contact__input"
              type="text"
              name="name"
              inputmode="text"
              required
              value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"
            /><label class="form-contact__label form-contact__label--animation"
              >Prénom Nom</label
            >
          </div>
          <div class="form-contact--user">
            <input
              class="form-contact__input"
              type="tel"
              name="tel"
              inputmode="tel"
              required
              value="<?= isset($_SESSION['inputs']['tel']) ? $_SESSION['inputs']['tel'] : ''; ?>"
            /><label class="form-contact__label form-contact__label--animation"
              >Tel</label
            >
          </div>
          <div class="form-contact--user">
            <input
              class="form-contact__input"
              type="email"
              name="email"
              inputmode="text"
              required
              value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"
            /><label class="form-contact__label form-contact__label--animation"
              >Email</label
            >
          </div>
          <div class="form-contact--user">
            <select class="form-contact__input" name="object" required>
              <option selected></option>
              <option value="0">Vers une naissance physiologique</option>
              <option value="1">RDV individuel thématique précise</option>
              <option value="2">Masterclass & Formations</option>
              <option value="3">Présentiel</option>
              <option value="4">Renseignements</option>
              <option value="5">Autre</option></select
            ><label class="form-contact__label">Objet de votre message</label>
          </div>
          <div class="form-contact--user">
            <label class="form-contact__label">Mon message</label>
            <textarea
              class="form-contact__input"
              name="message"
              rows="7"
              inputmode="text"
              required
            >
<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea
            >
          </div>
          <button class="form-contact__button" type="submit">Envoyer</button>
        </form>
      </section>

      <a href="#up" title="Retourner en haut du site"
        ><img
          class="arrow-up"
          src="./images/arrow-up.svg"
          alt="Flèche vers le haut"
      /></a>
    </main>

    <footer class="footer">
      <div class="footercontainer">
        <div class="footerblock">
          <a
            class="footer__link footer__link--title"
            href="./contact.php"
            title="Prendre rendez-vous"
            >Contactez-moi</a
          >
        </div>
        <a href="index.html" title="Accueil - Coeur de mama">
          <img
            class="headerlogo__img headerlogo__img--link"
            src="./images/logos/logo.svg"
            alt="Logo Coeur de mama"
          />
        </a>

        <div class="footerblock footerblock--temporary">
          <div class="headernetwork">
            <a
              href="https://www.instagram.com/coeur_de_mama_/"
              target="_blank"
              class="fa fa-instagram"
              title="Mon compte Instagram"
            ></a>
            <a
              href=""
              target="_blank"
              class="fa fa-facebook"
              title="Mon compte Facebook"
            ></a>
          </div>
        </div>
      </div>

      <!-- <p class="footer__text">
        <a
          class="footer__link footer__link--small"
          href="./CGV.html"
          title="Mentions légales & CGV"
          >Mentions légales & CGV</a
        >
      </p> -->
      <p class="footer__text">
        Copyright &copy; 2023 | Coeur de mama | Created by
        <a
          class="footer__link footer__link--small"
          href="http://benoit-ursini.com/"
          target="_blank"
          title="Site de Benoit Ursini"
          >Benoit Ursini</a
        >
      </p>
    </footer>

    <script src="./script.js"></script>
  </body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
