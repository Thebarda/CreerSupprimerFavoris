#Intro
Ce site vous permet de créer, supprimer et d'utiliser vos favoris au moyen d'images.

![image accueil](http://tomdarneix.com/Capture.PNG)

Fonctionne uniquement sous Mozilla firefox, Google Chrome. (Opera ?)

## Etape 1 - Installation de xampp
Téléchargez xampp depuis [ce lien](https://www.apachefriends.org/fr/download.html) et installez le.
Ouvrez "xampp control panel" si ce n'est pas fait.
Cliquez sur le bouton "Config" avec la clé à molette dessus.
Cochez la case **Apache** dans le module **Autostart of modules**.
Cliquez sur **Save**.
Déplacez le raccourci **XAMPP Control Panel** dans le dossier suivant **C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp**.
Remarque : Il faut activer les éléments cachés pour effectuer cette étape.
![éléments cachés](http://tomdarneix.com/87235667c9.png)

A chaque démarrage de windows, le serveur web va s'activer. Cela va vous permettre d'utiliser le site.

## Etape 2 - Mise en place du site
Videz le dossier **C:\xampp\htdocs**.
Téléchargez le site puis copiez le contenu du dossier **CreerSupprimerFavoris** de l'archive dans **C:\xampp\htdocs**.

##Etape 3 - Mise en place du module complémentaire
Définir **localhost/index.php**
Ce module vous permettra d'ouvrir la page de vos favoris à chaque fois que vous ouvrirez un nouvel onglet.
Sous Firefox, vous pouvez le télécharger en suivant [ce lien](https://addons.mozilla.org/fr/firefox/addon/new-tab-override/?src=search)
Sous Chrome, vous pouvez le télécharger en suivant [ce lien](https://chrome.google.com/webstore/detail/new-tab-redirect/icpgjfneehieebagbmdbhnlpiopdcmna?hl=fr)

Après installation, cliquez sur "Options" sur la page de gestion des extensions/modules.
Pour Firefox, faites attention de sélectionner **"Custom page"** sur le menu déroulant, puis écrivez l'url suivant **localhost/index.php**.
Pensez à sauvegarder sous Chrome.

Voilà vous pouvez sauvegarder vos favoris en utilisant des images, les supprimer et les utiliser en un clic.
