<?php
$content = file_get_contents('app/app.sample.json');
$content = str_replace(
    [
        'AppName',
        'AppDescription',
        'AppSlug'
    ],
    [
        $_POST['name'],
        $_POST['description'],
        $_POST['slug']
    ],
    $content
);
$content = file_put_contents('app/app.json', $content);
$status = shell_exec('gitcheckout.sh');
var_export($status);die;