<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>KaniShiel - Contact</title>
    <link rel="stylesheet" href="style_kani.css">
    <link rel="stylesheet" href="style_header.css">
    <link rel="stylesheet" href="style_validation.css">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.discordapp.com/avatars/537230211713073162/a6f3900094783514d3cfcdf106dbdcb7.png">
    <meta property="og:image" content="https://cdn.discordapp.com/avatars/537230211713073162/a6f3900094783514d3cfcdf106dbdcb7.png">
  </head>
     <body>
      <header>
      <!--menu hamburger-->
        <div class="menu-wrap">
          <input type="checkbox" class="toggler">
          <div class="hamburger"><div></div></div>
            <div class="menu">
              <div>
                <div>
                  <ul>
                    <li><a href="kani_accueil.html">Accueil</a></li>
                    <li><a href="commandes.html">Commandes</a></li>
                    <li><a href="regles.html">Règles</li>
                    <li><a href="contact_kani.html">Contact</a></li>
                    <li><a href="credits_kani.html">Crédits</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Lien invit bot-->
        <div class="logo_kani">
          <a href="https://discordapp.com/oauth2/authorize?client_id=537230211713073162&scope=bot&permissions=-1">
          <img src="kani.png" class="image5" height="50em" width="184em"></a>
        </div>
        <!--Support discord--> 
        <div class="logo_discord">
          <a href="https://discord.gg/6pnDcSs">
          <img src="discord.png" class="image4" height="auto" width="60em"></a>
        </div>
        <!-- Twitter -->
        <div class="logo_twitter">
          <a href="https://twitter.com/kanishiel?s=09">
          <img src="twitter.png" class="image3" height="auto" width="40em"></a>
        </div>
        <div class="transparent"> </div>
      </header>
      <section class="showcase">
        <div class="container showcase-inner">
          <div class="reponse">
            <p>
            <?php
            ini_set("sendmail_from","magicien.ghost@hotmail.com");
            $boundary = "-----=" . md5( uniqid ( rand() ) );
            $headers = "Reply-to: \"Votresite.com\" ".$_POST['mail']."\n"; 
            $headers .= "From: Retour Page Contact ".$_POST['mail']."\n";
            //NOTE: l'adresse email indiquée dans le header From doit etre l'adresse absolue du serveur qui envoie les messages, et peut etre differente de votre adresse de contact si vous etes par exemple sur un serveur dedié partagé. dans mon cas l'adresse specifiee ici est <webusers@mail.nomduserveur.com>
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"";
            $destinataire = "magicien.ghost@hotmail.com";
            $subject = utf8_decode('Retour page de contact KaniShiel');
            $message ="Expéditeur: ".$_POST['pseudo_discord']."\n --- \n E-mail de réponse: ".$_POST['mail']."\n --- \n Sujet: ".$_POST['sujet']."\n --- \n Description du problème: ".$_POST['description'];
            $message_confirm="Le formulaire a bien été envoyé. \n Le Staff vouys répondra par mail ou via Discord dans les plus brefs délais.";
            ini_set('SMTP','smtp.orange.fr');
            if(mail($destinataire, $subject, $message, $headers))
            {
              echo $message_confirm;  
            }
            else
            {
              echo 'Erreur d\'envoi. Merci de réessayer ultérierement.';
            }
            ?>
            </p>
          </div>
        </div>
      </section>
     </body>
</html>
