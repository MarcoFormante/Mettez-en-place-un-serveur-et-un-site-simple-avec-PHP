<?php 
require 'functions.php';
require 'bdd.php';

require 'header.php';

$errors = [];
$FORM_PARAMS = ['titre', 'artiste', 'image', 'description'];

foreach ($FORM_PARAMS as $param) {
    // check if fields are set
    if (!isset($_POST[$param])) {
        redirectTo('ajouter');
    }

    // check if fields are empty
    if(empty($_POST[$param]) || trim($_POST[$param]) === "" ){  
        $errors[] = "Le champ <b>". strtoupper($param) ."</b> ne peut pas etre vide";
    }
}


// check if description field has at least 3 characters
if (strlen($_POST['description']) < 3) {
    $errors[] = "Le champ <b> DESCRIPTION </b> doit contenir au-moins 3 caracter";
}
   

    // check if is a valid URL  
if( !filter_var($_POST['image'],FILTER_VALIDATE_URL) || !preg_match('/^https?:\/\/.+\.(jpg|jpeg|png|gif|webp)$/i', $_POST['image']) ) {
    $errors[] = "Le champ <b> IMAGE </b> doit avoir un URL valide : <br/> <b>Exemple</b>: https://chemin/image.( jpg | jpeg | png | gif )";
}


if (!count($errors)) {
     // if no errors, insert the oeuvre into database and redirect to homepage
    try {
        $query = "INSERT INTO oeuvres(titre,artiste,image,description)
                  VALUES(:titre,:artiste,:image,:description)
                 ";
        $pdoConnection = connection();
        $pdo = $pdoConnection->prepare($query);
        $pdo->execute( [
            'titre' => trim($_POST['titre']),
            'artiste' => trim($_POST['artiste']),
            'image' => trim($_POST['image']),
            'description' => trim($_POST['description'] )
        ]);

        redirectTo('index');

    } catch (Exception $e) {
        // if error, show a generic error message  
        generateErrorMessage("<b>Une Erreur est survenue, Veuillez retentez plus tard.</b>"); 
    }
}
?>

<?php if(count($errors)): ?>

<div id="form-errors-container">
    <p>Le formulaire contient les erreurs suivantes :</h2>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ;?>
    </ul>
</div>

<?php endif ?>


<?php require 'footer.php'; ?>