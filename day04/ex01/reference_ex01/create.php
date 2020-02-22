<?php
    function createFolder($path) {
        if (!file_exists($path))
            mkdir($path);
    }
    function checkFolder() {
        $folders = array("../htdocs", "../htdocs/private");
        foreach ($folders as $folder)
            createFolder($folder);
        $contents = unserialize(file_get_contents("../htdocs/private/passwd"));
        foreach ($contents as $users) {
            if ($users['login'] === $_POST['login']) {
                return (0);
            }
        }
        return (1);
    }
    if ($_POST['submit'] === "OK" && $_POST['login'] != NULL && $_POST['passwd'] != NULL && checkFolder()) {
        echo "OK\n";
        $new_user = array('login' => $_POST['login'], 'passwd' => hash('md5', $_POST['passwd']));
        $contents = unserialize(file_get_contents("../htdocs/private/passwd"));
        $contents[] = $new_user;
        file_put_contents("../htdocs/private/passwd", serialize($contents));
    }
    else
        echo "ERROR\n";
?>
