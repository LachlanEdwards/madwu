<?php
function fetchFAQ() {
    $pdo = include('inc/connect.php');
    $statement = $pdo->prepare("SELECT * FROM FAQ");
    $statement->execute();
    $results = $statement->fetchall();
    foreach ($results as $item) {
        echo "<div class=\"panel panel-default\">",
            "<div class=\"panel-heading\" role=\"tab\" id=\"heading{$item['id']}\" onclick=\"collapseEvent(this)\">",
                "<h4 class=\"panel-title\">",
                    "<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{$item['id']}\" aria-expanded=\"false\" aria-controls=\"collapse{$item['id']}\">{$item['Question']}<div class=\"caret\"></div></a>",
                "</h4>",
            "</div>",
            "<div id=\"collapse{$item['id']}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading{$item['id']}\">",
                "<div class=\"panel-body\">",
                    "{$item['Body']}",
                "</div>",
            "</div>",
        "</div>";
    }
}
fetchFAQ();
?>
