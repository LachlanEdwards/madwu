<?php
    function sortDate($a, $b) {
        $yday = getdate()["yday"];
        $a = $a['DayInYear'] - $yday;
        $b = $b['DayInYear'] - $yday;
        return $a - $b;
    }


    function fetchEvents() {
        $pdo = include('inc/connect.php');
        $yday = getdate()["yday"];
        $statement = $pdo->prepare("SELECT * FROM Events");
        $statement->execute();
        $results = $statement->fetchall();
        usort($results, "sortDate");
        foreach ($results as $item) {

            $index = array_search($item, $results);
            if ($index === 0) {
                echo "<div class=\"clearfix\">";
            }
            if ($index % 3 === 0 && $index != 0) {
                echo "</div>";
                echo "<div class=\"clearfix last-clearfix\">";
            };

            echo "<div class=\"col-md-4 equal\">";
                echo "<div class=\"event-item\">";
                    echo "<div class=\"date\">{$item['Day']} {$item['Month']}</div>";
                    echo "<div class=\"title\">{$item['Title']}</div>";
                    echo "<div class=\"details\">";
                    if ($yday > $item['DayInYear']) {
                        echo "We'll deliver more information for this event next year.";
                    } else {
                        echo "{$item['Desc']}";
                    }
                    echo "</div>";
                    if ($item['Flyer'] != null) {
                        if ($yday > $item['DayInYear']) {
                            echo "<div class=\"flyer\"><a href=\"http://{$_SERVER['HTTP_HOST']}{$item['Flyer']}\" target=\"_blank\">Last Flyer</a></div>";
                        } else {
                            echo "<div class=\"flyer\"><a href=\"http://{$_SERVER['HTTP_HOST']}{$item['Flyer']}\" target=\"_blank\">Flyer</a></div>";
                        }
                    } else {
                        echo "<div class=\"flyer\">No Flyer</div>";
                    };
                echo "</div>";
            echo "</div>";

            if ($index - 1 === count($results)) {
                echo "</div>";
            };

        };
    };
    fetchEvents();
?>
