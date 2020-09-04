# Challenge Wild Code School

![alt text](https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png)

Challenge Wild Code School - Les Argonautes

## Informations du projet 

Challenge de la formation ***Développeur web et mobile avancé - Alternance***. [Lien de la formation](https://www.wildcodeschool.com/fr-FR/formations/developpeur-web-alternance)

## Descriptif du besoin 

Vous expliquez à votre boss que vous allez adapter cette maquette, de façon à :

        afficher les membres d'équipage récupérés depuis une base de données, à la place de ceux déjà saisis "en dur"
        stocker les noms des nouveaux membres d'équipage en base de données, lors de la validation du formulaire
        améliorer sa mise en page, en disposant les noms des argonautes sur trois colonnes au lieu d'une seule

## Installation

1. Clonez le repo :
```
    git clone https://github.com/damienvalade/challenge_wcs .git
```

2. Modifier le .env avec vos informations.
 
3. Installez les dependances :
```
    composer install
```

4. Mettez en place la BDD :
```
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
```