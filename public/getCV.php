<?php
if(isset($_GET['path'])){
    $filename = $_GET['path'];
    var_dump($filename);
    if(file_exists($filename)){
        //REST Protopcole HTTP
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: 0');
        header('Content-Disposition: attachment; filename="'.basename($filename).'"');
        header('Content-Length: ' . filesize($filename));
        header('Pragma: public');
        //flush — Vide les tampons de sortie du système
        /**
         * Vide les tampons d'écriture système de PHP et tous ceux que PHP utilisait
         * (CGI, un serveur web, etc.). Cette fonction tente d'envoyer
         * tout l'affichage courant au navigateur, sous quelques conditions.

        flush() peut ne pas être capable d'écraser le schéma du tampon de
         * votre serveur web et ceci n'aura aucun effet
         * sur le tampon du navigateur côté client.
         * De plus, cette fonction n'affecte pas le mécanisme d'affichage du tampon
         * de l'espace utilisateur de PHP. Cela signifie que ob_flush() devrait être appelé
         * avant flush() pour vider les tampons de sortie s'ils sont utilisés.
         */
        flush();
        //Lecture du fichier
        readfile($filename);
        exit();
    }else{
        echo "Erreur: le fichier n'existe pas";
    }
}else{
    echo "Errerur: le fichier est inconnu";
}
?>

<a href="cv.pdf" class="mt-5" target="_blank">Afficher le CV</a>
<a class="mt-5" href="getCV.php?path=cv.pdf"><b>TELECHARGER LE CV</b></a>
