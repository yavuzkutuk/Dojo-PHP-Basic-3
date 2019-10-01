<?php
include '../src/function.php';
/**
 * Crée une fonction nommée sayHello permettant d'écrire "Hello Nite Owl".
 * Modifie la fonction pour qu'elle retourne "Hello Nite Owl" plutôt que de l'afficher directement.
 * Cette fonction ne doit pouvoir retourner que des chaînes.
 * Modifie la en lui ajoutant un paramètre nommé "name" de type string
 * Modifie le retour de la fonction pour qu'elle retourne "Hello {name}"
 * Rend le paramètre "name" optionnel. Si rien n'est précisé, ta fonction devra retourner "Hello Dr. Manhattan"
 */
echo '<h2>FONCTION</h2>';
echo'<h5>Crée une fonction nommée sayHello permettant d\'écrire "Hello Nite Owl".</h5>';
echo sayHello();
$watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl'];

echo'<h5>Crée une nouvelle fonction nommée "whoAmI", cette fonction retournera une chaîne (ou null).</h5>';
echo whoAmi('Ozymandias', $watchmen);