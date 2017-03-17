<?php

// A mettre ABSOLUMENT !!!!!
// ET AU DEBUT DU FICHIER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
session_start();

// Debug
print_r($_SESSION);

// Affiche l'identifiant de session
echo session_id();

// J'ajoute une donnée en session :

# $_SESSION['toto'] = 'tata';
# $_SESSION['usrId'] = 452;

