<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/css/fonts.css">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/burger.css">
    <link rel="stylesheet" href="./src/css/dropdown.css">
    <link rel="stylesheet" href="./src/css/popup.css">
    <link rel="stylesheet" href="./src/css/tooltip.css">
    <link rel="stylesheet" href="./src/css/timeline.css">
    <script src="./src/js/tooltip.js"></script>
</head>
<body>
    <header>
    <nav class="burgerNav">
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1 "></span>
              <span class="line line2 "></span>
              <span class="line line3 "></span>
            </div>  
            <div class="menu-items">
              <li><a href="./?action=accueil">Accueil</a></li>
              <li><a href="./?action=parcours">Parcours</a></li>
              <li><a href="./?action=experience#projets">Projets</a></li>
              <li><a href="./?action=experience#stages">Stages</a></li>
              <li><a href="./?action=experience#outils">Outils</a></li>
              <li><a href="./?action=accueil#contact">Contact</a></li>
            </div>
        </div>
      </div>
    </nav>
    <nav class="dropdownNav" id="navigation">
        <!-- <a href="#" class="logo">Studio<span>+<span></a> -->
        <ul class="links">
              <li><a href="./?action=accueil">Accueil</a></li>
              <li><a href="./?action=parcours">Parcours</a></li>
            <li class="dropdown"><a class="trigger-drop">Expérience<i class="arrow"></i></a>
            <ul class="drop">
              <li class="first"><a href="./?action=experience#projets">Projet</a></li>
              <li><a href="./?action=experience#stages">Stage</a></li>
              <li class="last"><a href="./?action=experience#outils">Outil</a></li>
            </ul>
            </li>
              <li><a href="./?action=accueil#contact">Contact</a></li>
        </ul>
    </nav>
    </header>
