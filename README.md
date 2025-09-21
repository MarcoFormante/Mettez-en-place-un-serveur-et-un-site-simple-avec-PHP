# The ArtBox

Ce projet contient : 
* Le code initial du projet The ArtBox pour réaliser le projet 4 du parcours PHP/Symfony sur la branche `main`.
* Les corrections des différentes étapes sur les branches `correction-etapeX` (avec X le numéro de l'étape).

## Installation du projet

Pour installer ce projet : 
1. Télécharger le projet en cliquant sur le bouton "Code" ci-dessus puis "Download ZIP".
2. Dézipper le projet et placez-le dans le dossier contenant vos projets PHP habituels.
3. Ouvrir le projet dans le navigateur via l'adresse http://localhost/NOM_DU_DOSSIER (ou autre selon votre configuration)
4. Ouvrir le projet dans votre IDE (exemple : VSCode) pour réaliser les prochaines étapes.



# DONE 

### branch: main  
1. Cloned the project repository, and pushed it to my GitHub account.
2. Created the database and the oeuvres table: 

    - **CREATE DATABASE artbox**
    - ```
     CREATE table oeuvres(
	id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titre varchar(255) NOT NULL,
	description TEXT NOT NULL,
	artiste varchar(255) NOT NULL,
	image varchar(255) NOT NULL 
)
```


3. Add sample entries into the oeuvres table using the following SQL statement:

```
    INSERT INTO oeuvres(titre,description,artiste,image) VALUES(
    'Aashaaheen Baadal',
    'Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection',
    'Anaisha Devi',
    'img/pawel-czerwinski-3.png'
    ),(
    'Nightlife Traffic',
    'Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.',
    'Andrew Forsythe',
    'img/dan-cristian-padure.png'
    )

```