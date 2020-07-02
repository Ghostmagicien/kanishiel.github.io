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
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="commandes.html">Commandes</a></li>
                    <li><a href="regles.html">Règles</a></li>
                    <li><a href="contact_kani.html">Contact</a></li>
                    <li><a href="credits_kani.html">Crédits</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Retour accueil-->
        <div class="logo_kani">
          <a href="index.html">
          <img src="kani.png" class="image5" height="50em" width="184em"></a>
        </div>
        <div class="logo">
        <!-- invit bot-->
        <div class="invit">
        <a href="https://discordapp.com/oauth2/authorize?client_id=537230211713073162&scope=bot&permissions=-1">
        <img src="logo_kani.png"  width="40em" heigth="auto" alt="logo Kani"></a>
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
        </div>
        <div class="transparent"> </div>
      </header>
      <section class="showcase">
        <div class="container showcase-inner">
          <div class="reponse">
            <p>
            <?php
              ini_set("SMTP","Magicienghost.github.io");
              ini_set("smtp_port","25");
              ini_set("sendmail_from","magicien.ghost@hotmail.com");
              $destinataire="ghost.magicien@hotmail.com";
              $sujet="Retour Page Contact Kani";
              
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
              $headers .= 'From: Kani_Support@gmail.com' . "\r\n";
              $headers .= 'Reply-to: '.$_POST['mail']. "\r\n" ;
              $headers .='Content-Transfer-Encoding: 8bit'; 
              $message=utf8_decode("
              <html>
                
                <body>
                  Expéditeur: ".$_POST['pseudo_discord']."</br> --- </br> E-mail de réponse: ".$_POST['mail']."</br> --- </br> Sujet: ".$_POST['sujet']."</br> --- </br> Description du problème: ".$_POST['description']."</p>
                </body>
              </html>");
              
            if(mail($destinataire, $sujet, $message, $headers))
            {
            $message_confirm="<html>Le formulaire a bien été envoyé. </br> Le Staff vous répondra par mail ou via Discord dans les plus brefs délais.</html>";
              echo $message_confirm;
            }
            else
            {
              echo "Erreur d'envo. Merci de réessayer ultérieurement.";
            }
            ?>
            </p>
          </div>
        </div>
      </section>
     </body>
</html>
 --- \n E-mail de réponse: ".$_POST['mail']."\n --- \n Sujet: ".$_POST['sujet']."\n --- \n Description du problème: ".$_POST['description'];