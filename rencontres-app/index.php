<!-- Créer une application de rencontres qui va afficher les utilisateurs sur la page d'accueil.

Chaque utilisateur aura :
- un pseudo
- un mot de passe
- une date de naissance
- une photo de profil
- une orientation sexuelle

Il y aura un formulaire d'inscription pour enregistrer un utilisateur. Les mots de passe seront chiffrés.
Chaque utilisateur pourra donc se connecter via un formulaire.
Une fois connecté, il pourra accéder à une page lui permettant de saisir ses informations de profil, y compris la photo de profil.

Les pages à réaliser sont :
- index.php (page d'accueil)
- login.php (connexion)
- register.php (inscription)
- logout.php (déconnexion)
- profile.php (page pour éditer son propre profil)
+ éventuellement, une page cible du formulaire se trouvant dans profile.php -->


<?php
require_once "User.php";
require_once "layout/header.php";
 ?>   
 <h1 class="text-center">Bienvenue sur Rencontres-app !</h1>
 
<?php
$p = new User();
var_dump($p->getUsersList());

require_once "layout/footer.php";

