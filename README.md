# The ArtBox



## Installation du projet

Pour installer ce projet : 
1. Télécharger le projet en cliquant sur le bouton "Code" ci-dessus puis "Download ZIP".
2. Dézipper le projet et placez-le dans le dossier contenant vos projets PHP habituels.
3. Ouvrir le projet dans le navigateur via l'adresse http://localhost/NOM_DU_DOSSIER (ou autre selon votre configuration)


# L'exercice:
Vous avez récemment réalisé la refonte du site de The ArtBox, une galerie d'art contemporain. 
Fatima, la responsable de communication, reprend contact avec vous pour une nouvelle mission. 
Elle souhaite ajouter de nouvelles œuvres sur le site web, sans avoir à modifier le code. 
 
Pour y parvenir, 
vous allez mettre en place une base de données pour stocker les œuvres,
 ainsi qu’un formulaire de création de nouvelles œuvres avec les champs suivants : 

- nom de l'œuvre ; 
- nom de l'artiste ;
- lien vers la photo de l'œuvre ;
- description de l’œuvre.

Dans cette première version, il n’y aura pas de contrôle d’accès, ce qui veut dire que n’importe qui peut ajouter des œuvres.


# DONE 

### branch: main  
1. Cloned the project repository, and pushed it to my GitHub account.
2. Created the database and the oeuvres table: 

    - **CREATE DATABASE artbox**
    - 
    ```
     CREATE table oeuvres(
	id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titre varchar(255) NOT NULL,
	description TEXT NOT NULL,
	artiste varchar(255) NOT NULL,
	image varchar(255) NOT NULL 
    )
    ```


3. Add some entries to the oeuvres table using the following SQL statement:

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

### branch: correction-etape2 : Étape 2 – Concevez la base de données du projet

 - Add all entries into database and deleted file `oeuvres.php`. 




### branch: correction-etape3 : Étape 3 – Mettez à jour la page d'accueil du site

 - Create `bdd.php` file with PDO Connection returned by `connection` function.
 - *index.php* : Fetch all entries and test in vardump(). 
 - *functions.php* : Create function GenerateErrorMessage for displaying errors.
 - *index.php* : Add error message if no entries in database and escape HTML output.
 - *style.css* : add style for the new class `error-message`.


### branch: correction-etape4 : Étape 4 – Mettez à jour la page de détail d'une œuvre 

- Add Database connection.
- Fetch oeuvre data.
- Escape all fields.
- Add RedirectTo function to redirect to index if there is not valid ID or not valid oeuvre.


### branch: correction-etape5 : Étape 5 – Validez le formulaire de création d’une œuvre

- Check if all fields are set and not empty.
- Check if description field has at least 3 characters.
- Check if image field is a valid URL. 
- Check and diplay errors.  


### branch: correction-etape6 : Étape 6 – Insérez l’œuvre en BDD

- Add Connection for creating new Oeuvre into database with valid inputs
- Verify if the new entries appear on the homepage.