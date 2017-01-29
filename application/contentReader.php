<?php
require_once 'config.php';

function getContent($path)
{
    $result = [];

    if (file_exists($path)) {
        $forbiddenFolders = ['.', '..'];
        $directoryHandler = opendir($path);

        while (false !== ($entry = readdir($directoryHandler))) {
            if (!in_array($entry, $forbiddenFolders)) {
                $result[] = [
                    'title' => $entry,
                    'content' => file_get_contents($path . $entry)
                ];
            }
        }

    }

    return $result;
}

function getShortContent($str)
{
    $result = mb_substr($str, 0, 75, 'UTF-8');
    if ($result != $str) {
        $result .= '...';
    }
    return $result;
}
