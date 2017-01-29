<div class="col-md-6 col-md-offset-3">
    <p><a class="btn btn-default" href="<?= $config['rootProject'] ?>"
          role="button">Back to main page</a></p>
    <hr>

    <form class="form-horizontal" method="post">
        <div class="form-group">
            <input type="text" name="aTitle" class="form-control" placeholder="Article title" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="aContent" rows="6" required></textarea>
        </div>
        <div class="form-group ">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </form>

</div>

<?php
if (!empty($_POST)) {
    if (isset($_POST['aTitle'])) {

        $title = trim($_POST['aTitle']);
        $fileName = $config['content'] . ucfirst($title) . '.txt';
        file_put_contents($fileName, $_POST['aContent']);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . $config['rootProject']);

    }
}