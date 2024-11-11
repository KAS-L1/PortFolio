<?php require("app/init.php") ?>

<?php $PAGE = GET(0) ?>

<?php

if ($PAGE != "index") {

    if (VIEW("page/", $PAGE) == "404") {
        include("page/404.php");
    } else {
        include(VIEW("page/", $PAGE));
    }
} else {
    include('page/landing_page.php');
}

?>



