<?php
# Micro-functions to simply select title
# TODO : Json file with title data
function selectTitle(){
    if(basename(__FILE__)=="index.php"){
        return "Antonin Blot - Présentation";
    }else{
        return "Titre";
    }
}
# Function to generate head content for pages
function printHead(){ 
$titre=selectTitle();
$retour=<<<HTML
        <title>Antonin Blot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/fonts/remixicon.css" />
        <script src="js/bootstrap.bundle.min.js"></script>
    HTML;
    return $retour;
}
