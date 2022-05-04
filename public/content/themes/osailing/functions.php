<?php
// de part son existence, ce fichier va etre executé
// tout seul grace a Wordpress 

//! BASE functions.php

// Cette fonction configure les fonctionnalités du thème
function initializeTheme()
{
    // Doc WP theme activer fonctionnalité https://developer.wordpress.org/reference/functions/add_theme_support/
    // post-thumbnail = une image pour un post ( ici un article )
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

// IMPORTANT WP hook pour pour configurer notre theme
add_action(
    'after_setup_theme', // lorsque l'event 'after_setup_theme' sera déclanché
    'initializeTheme' // execution de la fonction osailing_initializeTheme()
);
// parallele avec Javascript
// document.addEventListener('after_setup_theme', app.osailing_initializeTheme)

// chargement des assets (css/js)
function loadAssets()
{
    // IMPORTANT WP ajout d'un css
    // DOC WP ajout d'un css https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style(
        'main-css', // le css doit avoir un identifiant UNIQUE
        get_theme_file_uri('assets/css/style.css')  // l'url du css qu'il faut charger
    );

    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/js/main.js')
    );
}

add_action('wp_enqueue_scripts', 'loadAssets');

// fonction qui permet de réduire la taille des résumés
function excerptLenght($theExcerpt)
{
    $trucatedExcerpt = substr($theExcerpt, 0, 100);
    $trucatedExcerpt .= ' ...';
    return $trucatedExcerpt;
}

add_action('get_the_excerpt', 'excerptLenght');

// Application d'un effet sépia sur toutes les images 
// de façon random (une chance sur deux)
// déclaration de la fonction DIRECTEMENT dans le add_action

add_action('get_header', function(){
    if(rand(0,1) ===1){
        echo "<style>";
        echo "img {
            filter: sepia(90%)
            }";
        echo "</style>";
    }

});


//! customizers numero 1 : changer l'image de la page d'accueil

//todo STEP 0 : Enregistrement du hook pour activer notre customizer ( https://codex.wordpress.org/Theme_Customization_API )

add_action('customize_register', 'osailing_header_image_customizer');


//todo STEP 1 : déclaration de la fonction configurant le customizer
// le paramètre $wpTheme va etre un objet qui va représenter notre Theme

function osailing_header_image_customizer($wpTheme)
{

    //todo STEP 2 : déclaration de la section dans laquelle sera disponible notre customizer
    $wpTheme->add_section(
        'custom-image', // identifiant de la section
        [
            'title' => 'Customization des images',
            'priority' => 0
        ]
    );

    //todo STEP 3 : déclaration de la "variable" pour laquelle nous utiliserons un customizer pour en choisir la valeur
    $wpTheme->add_setting(
        // identifiant de la variable
        'header-background-image',
        // tableau d'options pour notre variable
        [
            'default' => 'https://bstatic.com/xdata/images/xphoto/1182x887/82877075.jpg?k=db9e00135b7b8f038aad88a7676235667ca249a5eed997a499677812fa332833&o=?size=S',
            // cette option permet de spécifier la technique qui sera utilisée pour gérer la preview dans le backOffice
            'transport' => 'refresh'
        ]
        );


        //todo STEP 4 : déclaration du composant d'UX qui sera utilisé pour donner une valeur a notre variable

        // on les appelera des "control" et un "control" est le terme utilisé en anglais pour parler d'un élément UX
        $imageSelector = new WP_Customize_Image_Control(
            // Le premier argument à passer est l'objet nous permettant de communiquer avec le customiser du thème wordpress
            $wpTheme,
            // identifiant du control
            'header-background-image-control',
            //options du control
            [
                'label' => 'Choose header image',
                // dans quelle section nous pourrons aller modifier l'image du header
                'section' => 'custom-image',
                // on précise quelle "variable" sera modifiée par le composant
                'settings' => 'header-background-image'
            ]
        );
    
    //todo STEP 5 : enregistrement du composant pour configurer notre variable

    $wpTheme->add_control(
        // add_control attend une instance de "Control" (élément d'UX)
        $imageSelector 
    );




}