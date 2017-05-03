<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Envoyer un mail en PHP</title>
</head>

<body>
  <!-- Filtrage des serveurs -->
  <?php

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))

    {

        $passage_ligne = "\r\n";

    }

    else

    {

        $passage_ligne = "\n";

    }

    ?>

    <!-- Déclaration de l'adresse expéditeur  -->
    <?php

    $header = "From: \"EXPEDITEUR\"<ADRESSE_EXPEDITEUR>".$passage_ligne;

    ?>

      <!--Déclaration de l'adresse de retour  -->
      <?php

    $header.= "Reply-to: \"RETOUR\" <ADRESSE_RETOUR>".$passage_ligne;

    ?>

        <!-- Déclaration de la version de MIME -->
        <?php

    $header.= "MIME-Version: 1.0".$passage_ligne;

    ?>

          <!-- Déclaration du Content Type  -->

          <?php

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

?>

</body>

</html>
