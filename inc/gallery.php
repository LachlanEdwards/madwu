<?php
    $gallery = array_diff(scandir("img/gallery/"), array('..', '.', 'thumbnails', '.DS_Store'));
    foreach ($gallery as $image) {
        echo "<div class=\"cell\"><a href=\"img/gallery/$image\" target=\"_blank\"><img src=\"img/gallery/thumbnails/$image\" alt=\"\" /></a></div>";
    }
?>
