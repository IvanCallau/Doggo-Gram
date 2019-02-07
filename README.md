
# Doggo-Gram

(Linux)

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\Description:/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

Site de création de profil pour propriétaires de chiens,
pour y ajouter leur/s chien/s et mettre des article sur lui/eux.
Ainsi que pouvoir commenter sur ces articles par d'autres usagers.

/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/


''''''''''''''''''''''''''''''PostScriptum:''''''''''''''''''''''''''''''''

Toutes les requetes SQL pour la création des tables dans la base de
données sont dans le fichier "requeteSQL.sql".

'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''


----------------------------!!!!IMPORTANT!!!!------------------------------

1:Créer le dossier "Images" dans le dossier du projet.
(Pour notre projet "Images" s'appelera "Chiens".)

2:Ouvrir le terminal et écrire:
$ cd chemin/vers/dossier/Images

3:Créer dans le dossier Images un fichier appelé ".keep":
$ touch .keep

4:Retourner dans le dossier du projet.

5:Git pull, git add, git commit et git push le fichier ".keep".
git pull
git add Images/.keep
git commit -m "Création du dossier upload Images"
git push

6:Ensuite regarder les droits du dossier "Images":
$ ls -l

Images drwxr r--x r--x cf cf

7:Changer le groupe du dossier Images pour donner les droits à PHP:
sudo chown www-data:www-data Images

---------------------------------------------------------------------------


********************Conventions d'écriture des codes:**********************

Code PHP:

Variables en Camelcase, sauf les "id" qui on un underscore.

Créer un fichier php pour le footeur et le header
de la majoritée des pages.
(pour qu'elles soient toutes modifiées en même temps)

***************************************************************************

Code HTML:

Format de l'indentation en "Format text".

***************************************************************************

Code CSS:

Si le temps le permet: 
Tout les CSS en un seul fichier,
pour les footers et les headers.

***************************************************************************