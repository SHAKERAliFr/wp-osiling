# Creation theme


- 1/ je fabrique un dossier dans content/themes (ici : osailing)

- 2/ On ne veut surtout pas ignorer ce dossier donc on vient completer le .gitignore

```
vendor
wp
composer.lock
# Attention nous n'avons pas envie que nos mots de passe se retrouve sur github
wp-config.php


# nous demandons a git d'ignorer tout ce qui se trouve dans le dossier content
# ATTENTION à utiliser des chemins complets
/public/content/*
# MAIS nous demandons a git de quand même surveiller content
!/public/content
# nous demandons a git d'ignorer tout ce qui se trouve dans le dossier content/themes
/public/content/themes/*
# MAIS nous demandons a git de surveiller quand même content/themes
!/public/content/themes
# Dans themes, ne pas ignorer osailing
!/public/content/themes/osailing

```

- 3/ On fabrique deux fichiers dans le dossier osailing : 
  - style.css 

    ```
    /*
    Theme Name: OSailing
    Text Domain: osailing
    Description: Le super theme des Xandar
    Author: Xandar team
    Documentation: https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
    */
    ```

    - index.php

    ```
    <?php
    
    echo "YATA";
    ```

- 4 / Coté BackOffice, le theme doit apparaitre dans la section "appearence", je peux donc l'activer ! 

- 5 / A partir de ce moment là, nous avons bien fabriqué la base de notre theme custom ! 

- 6 / Si une intégration a été réalisé, je peux fabriquer un dossier integration dans mon dossier osailing, et venir la déplacer dans ce dernier (ATTENTION si l'intégration a été réalisée avec parcel&SASS il faudra faire un BUILD en amont)

- 7 / Je fabrique un dossier assets dans lequel je vais venir bien ranger toutes mes ressources (qui sont dans le dossier intégration)
(Ce dossier intégration ne nous permet que d'avoir les fichiers d'inté sous la main)
 
- 8 / Je copie le contenu du index.html de mon intégration dans index.php de mon dossier osailing

- 9 / A partir de là, il ne me reste plus qu'a corriger les liens, faire la découpe des fichiers en partials/header/footer et mettre en place le reste de mon theme

