<?php
include_once('./partials/header.php');
require('./process/get_index.php');
?>

<main class="index_display">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <!-- <p> <a href="upload.php">Ajouter une image</a> </p>
        <p> <a href="./process/process_logout.php">Se déconnecter</a> </p> -->
        <section class="gallery d-flex justify-content-center align-items-center">
            <?php foreach($images as $image) { ?>
                <div>
                    <a href="./image.php?id=<?=$image['id']?>"> <img src="<?=$image['link']?>"> </a>
                </div>
            <?php } ?>
        </section>
    </div>
</main>




<?php
include_once('./partials/footer.php');
?>