<?php
    require 'bdd.php';

    $pdoConnection = connection();
    $stmt = $pdoConnection->prepare("SELECT * FROM oeuvres");
    $stmt->execute();

    $oeuvres = $stmt->fetchAll();

    var_dump($oeuvres);
    
    require 'header.php';
?>
<div id="liste-oeuvres">
    <?php foreach($oeuvres as $oeuvre): ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
                <h2><?= $oeuvre['titre'] ?></h2>
                <p class="description"><?= $oeuvre['artiste'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
