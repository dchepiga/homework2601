<div class="col-md-12">

    <?php
    if (!empty($_GET)) {
        $fileName = $config['content'] . $_GET['articleName']; ?>
        <h2><?= pathinfo($fileName)['filename'] ?></h2>
        <?php
        if (file_exists($fileName)) {
            readfile($fileName);
        }
        else{
            header("HTTP/1.0 404 Not Found");
            echo "Not Found";
        }
    }
    ?>

    <hr>
    <p><a class="btn btn-default" href="<?= $config['rootProject'] ?>"
          role="button">Back to main page</a></p>
</div>
