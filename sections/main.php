<?php
require_once __DIR__ . '/../db/music_db.php';
?>



<style>
    <?php
    include __DIR__ . '/../css/main.css';
    ?>
</style>

<?php foreach ($data as $album) {
?>
    <div class="card-container-custom">
        <div class="card-img-container">
            <img src="<?php echo $album['poster'] ?>" alt="album . <?php $album['title'] ?>">
        </div>
        <div class="card-body-custom">
            <h5 class="card-title-custom"><?php echo $album['title'] ?></h5>
            <p class="card-custom-text author"><?php echo $album['author'] ?></p>
            <p class="card-custom-text year"><?php echo $album['year'] ?></p>
        </div>
    </div>
<?php } ?>