# oSailing

## Description

oSailing est le blog d'un marin qui a pour projet de faire le tour du monde à la voile. Le client souhaite parler des ses semaines en mer, de ses escales et des différentes rencontres qu'il fera pendant son voyage.

## Pages

Le site aura quatre type de pages :

- [oSailing](#osailing)
  - [Description](#description)
  - [Pages](#pages)
    - [Accueil](#accueil)
    - [Liste de tous les articles](#liste-de-tous-les-articles)
    - [Article](#article)
    - [Catégorie](#catégorie)
  - [Frontend](#frontend)
  - [Backend](#backend)

### Accueil

- Header &laquo; full &raquo; (pleine hauteur de page)
- Liste des derniers articles publiés pour chaque catégorie :
  - Image
  - Titre
  - Résumé
  - Lien vers l'article
- Nombre total des articles par catégorie
- Footer

### Liste de tous les articles

- Header &laquo; light &raquo;
- Liste des articles :
  - Image
  - Titre
  - Lien vers la catégorie
  - Date de publication
  - Résumé
  - Lien
- Pagination
- Footer

### Article

- Header
- Article
  - Image
  - Titre
  - Date de publication
  - Catégorie
  - Contenu
- Pagination
- Commentaires
- Footer

### Catégorie

- Header
- Titre de catégorie
- Liste des articles avec :
  - Image
  - Titre
  - Date de publication
  - Résumé
  - Lien
- Pagination
- Footer

## Frontend

L'[intégration](./integration) a déjà été réalisée. Les intéractions JavaScript quant à elles n'ont pas été implémentées :

- Effet de parallaxe sur le texte de la banière de la page d'accueil
- Effet de parallaxe sur le titre sur la page d'un article
- Ajout de la bordure en fonction de la taille du bloc article dans les pages de liste d'article (Blog, Catégorie)
- Allumage des éléments du menu de la page d'accueil en fonction de la position du scroll sur la page d'accueil

## Backend

Nous allons dynamiser l'intégration fournie avec le CMS WordPress.
