<?php
require_once('application/config.php');
require_once('application/session.php');
require_once('assets/templates/header.php');
require_once('application/contentReader.php');


$content = getContent($config['content']);

if (!empty($_GET)) {
    if (isset($_GET['articleName'])) {
        ob_start();
        require_once('application/contentViewer.php');
        ob_end_flush();
    }
    if (isset($_GET['addArticle'])) {
        ob_start();
        require_once('application/addContent.php');
        ob_end_flush();

    }
} elseif (!empty($content)) {

    foreach ($content as $item): ?>
        <div class="col-md-4">
            <h2><?= pathinfo($item['title'])['filename'] ?></h2>

            <p><?= getShortContent($item['content']) ?></p>

            <p><a class="btn btn-default"
                  href="?articleName=<?= $item['title'] ?>" role="button">View
                    details &raquo;</a>
                <a class="download-link" href="application/downloadContent.php?titleName=<?= $item['title'] ?>"
                   role="button">Download article</a></p>
        </div>
    <?php endforeach;

}
require_once('assets/templates/footer.php');

