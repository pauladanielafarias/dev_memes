<!-- INCLUDE VARIABLES FILE -->
<?php include_once '../variables.php'; ?>

<!DOCTYPE html>
<html lang="en">

<!-- INCLUDE HEAD FILE -->
<?php include './views/partials/head.html'; ?>

<body>
    <div class="row">
        <!-- INCLUDE HEADER FILE -->
        <?php include './views/partials/header.php'; ?>
    </div>

    <div class="row m-4 text-center">
        <h1>Dev Memes</h1>
    </div>

    <div class="m-4 text-center">
        <button onclick="getMeme()" class="btn btn-primary">Get meme</button>
    </div>

    <!-- INCLUDE FOOTER FILE -->
    <?php include './views/partials/footer.php'; ?>


    <!-- INCLUDE SCRIPTS FILE -->
    <?php include './views/partials/scripts.html'; ?>

</body>

</html>