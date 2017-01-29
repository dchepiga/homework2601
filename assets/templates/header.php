<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Simple content viewer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= $config['rootProject'] ?>">Simple content viewer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if (!array_key_exists('auth', $_SESSION)): ?>
                <form class="navbar-form navbar-right" action="application/login.php" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            <?php else: ?>

                <a href="application/logout.php" class="btn btn-success pull-right btn-header">
                    <?= $_SESSION['auth'] . ' (Logout)' ?></a>
                <a href="?addArticle" class="btn btn-success pull-right btn-header">
                    Add an article</a>

            <?php endif; ?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="jumbotron"></div>
<div class="container">
    <div class="row">