<?php
# reda-prefo-php\public\index.php

/*
Notre contrôleur frontal
Il est la seule page publique du site
*/

// si on a une variable get nommée p
if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "entreprise":
            include "../view/entrepriseView.php";
            break;
        case "interview":
            include "../view/interviewView.php";
            break;
        // variable p pas dans le switch
        default:
            include "../view/error404View.php";
    }

// sinon nous sommes sur l'accueil    
}else{
    // Appel de la vue
    include "../view/homepageView.php";
}